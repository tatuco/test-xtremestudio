<?php

namespace App\Models;

use App\Core\Hstore;
use App\Core\Utils;
use App\Http\Services\DateService;
use App\Query\QueryBuilder;
use Illuminate\Database\Eloquent\Model;
use App\Core\TatucoModel;
use stdClass;

class Detention extends TatucoModel
{
    protected $guarded = ['id'];

    protected $casts = [
      "id" => "char"
    ];

    public function scopeEvents($query, $id)
    {
        return QueryBuilder::for(Event::class)
            ->where('detention_id', $id)
            ->get();
    }

    public function scopeFiles($query, $id)
    {
        return QueryBuilder::for(File::class)
            ->where('detention_id', $id)
            ->where('deleted', false)
            ->where('file_event', false)
            ->orderBy('type_id', 'asc')
            ->get();
    }

    public function scopeFilesWithType($query, $id)
    {
        return QueryBuilder::for(FileType::class)
            ->select('file_types.id as file_type_id', 'file_types.name as file_type_name', 'f.*')
            ->join('files as f', 'f.type_id', 'file_types.id')
            ->where('detention_id', $id)
            ->where('f.deleted', false)
            ->orderBy('type_id', 'asc')
            ->get();
    }


    public function scopeEventWithSubEvents($query, $id ) {

        $list = QueryBuilder::for(Event::class)
            ->selectRaw(" CONCAT('W', (WEEK(date)-(select WEEK(date) from `events` where detention_id = '".$id."' and type_id = 1))) AS week, id, name, description, date, out_of_time, type_id, status_id, `check`, deleted, detention_id, clasification_id")
           // ->select('*')
            ->where('detention_id', $id)
            ->where('deleted', false)
            ->orderBy('clasification_id')
            ->orderBy('date')
            ->get();
      //  echo $list;
        /*
         *  (WEEK(date)-(select WEEK(date) from `events` where detention_id = ID_DETENCION and type_id = 1))
         */
        $resp = [];
       // $event_pivote = Hstore::find($list, 'type_id', 1);
       // echo $event_pivote;
        $date_pivote = '';
        $percentage = 0;
        $cont_sub_event_complits = 0;
        $cont_events = 0;
        $events_efecty = 0;
        $list_clasifi = Clasification::select('id','name')->get();
        $array_clasifi = [];

        $clasification_aux = 0;
        foreach ($list as $it) {

            if ($it->status_id == 1) {
                $events_efecty++;
            }
            $sub_events = Event::subEvents($it->id);
            $files = Event::files($it->id);
            if ($it->check) {
                if (count($sub_events) == 0) {
                    $it->percentage = 100;
                }
                $cont_events++;
            }
            foreach ($sub_events as $sb) {
                if ($sb->check)
                    $cont_sub_event_complits++;
            }

            if (count($sub_events) > 0) {
                $it->percentage = Utils::calculatePorcentage($cont_sub_event_complits, count($sub_events));
            }

            $it->sub_events = $sub_events;
            $it->files = $files;
            $cont_sub_event_complits = 0;

            /**
             * agrupacion por clasificacion
             */

            array_push($resp, $it);
        }
        $group_events = Utils::groupArray($resp, 'clasification_id');
        $final = [];
        foreach ($list_clasifi as $it) {
            $obj = new StdClass();
            $obj->id = $it->id;
            $obj->name = $it->name;
            $obj->events = $group_events[$it->id];

            array_push($final, $obj);
        }
        $total_events = count($list);
        return [
                    "events" => $resp,
                    "group" => $group_events,
                    "final" => $final,
                    "percentage" => Utils::calculatePorcentage($cont_events, $total_events),
                    "percentage_effecty" =>  Utils::calculatePorcentage($events_efecty, $cont_events),
                    "count_events_effecty" => $events_efecty,
                    "count_events" => $total_events
                ];
    }

    public function scopeEmails($query, $id)
    {
        return QueryBuilder::for(Email::class)
            ->select('emails.name', 'emails.confirmed')
            ->join('detentions as d', 'emails.detention_id', 'd.id')
            ->where('d.id', $id)
            ->where('emails.deleted', false)
            ->get();
    }

}
