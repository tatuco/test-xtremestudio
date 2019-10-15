<?php

namespace App\Models;

use App\Core\Hstore;
use App\Core\Utils;
use App\Http\Services\DateService;
use App\Query\QueryBuilder;
use Hamcrest\Util;
use Illuminate\Database\Eloquent\Model;
use App\Core\TatucoModel;
use Nexmo\Numbers\Number;
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
            ->where('f.file_event', 0)
            ->orderBy('type_id', 'asc')
            ->get();
    }


    public function scopeEventWithSubEvents($query, $id)
    {

        $list = QueryBuilder::for(Event::class)
            ->selectRaw(" CONCAT('W', (WEEK(date)-(select WEEK(date) from `events` where detention_id = '" . $id . "' and type_id = 1))) AS week, events.id, events.name, events.responsable, events.description, date, out_of_time, type_id, status_id, `check`, events.deleted, detention_id, clasification_id, c.name as clasification_name")
            ->join("clasifications as c", "events.clasification_id", "c.id")
            ->where('detention_id', $id)
            ->where('events.deleted', false)
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
        // $list_clasifications = Clasification::select('id','name')->get();
        //  $array_clasifi = [];

        // $clasification_aux = 0;
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
        $total_events = count($list);
        //  $group_events = Utils::groupArray($resp, 'clasification_id');
        //  $result = [];
        // $cont_cla = 0;
        /* foreach ($list_clasifications as $it) {
             foreach ($group_events as $key => $value) {
                 if ($it->id == $key) {
                     $cont_cla++;
                     $obj = new StdClass();
                     $obj->id = $it->id;
                     $obj->name = $it->name;
                     $obj->events = $value;
                     $obj->count = $cont_cla;
                     $obj->count_checks = $this->countEventsCheck($value);
                     $obj->percentage = Utils::calculatePorcentage($obj->count_checks, $cont_cla);
                     array_push($result, $obj);

                 } else {
                     $cont_cla = 0;
                     $obj = new StdClass();
                     $obj->id = $it->id;
                     $obj->name = $it->name;
                     $obj->events = [];
                     $obj->count_checks = 0;
                     $obj->count = 0;
                     $obj->percentage = Utils::calculatePorcentage($obj->count_checks, $cont_cla);
                 }
             }
         }*/
        //  $final = [];
        /*   foreach ($list_clasifi as $it) {
               $obj = new StdClass();
               $obj->id = $it->id;
               $obj->name = $it->name;
               $obj->events = $group_events[$it->id];

               array_push($final, $obj);
           }*/
        return [
            "events" => $resp,
            //  "group" => $result,
            //  "final" => $final,
            "percentage" => Utils::calculatePorcentage($cont_events, $total_events),
            "percentage_effecty" => Utils::calculatePorcentage($events_efecty, $cont_events),
            "count_events_effecty" => $events_efecty,
            "count_events" => $total_events
        ];
    }

    public function scopeEventWithClasifications($query, $id)
    {
        try {
            $list = QueryBuilder::for(Event::class)
                ->selectRaw(" CONCAT('W', (WEEK(date)-(select WEEK(date) from `events` where detention_id = '" . $id . "' and type_id = 1))) AS week, events.id, events.name, events.description, date, out_of_time, type_id, status_id, `check`, events.deleted, detention_id, clasification_id, c.name as clasification_name, events.date_check")
                ->join("clasifications as c", "events.clasification_id", "c.id")
                ->where('detention_id', $id)
                ->where('events.deleted', false)
                ->orderBy('clasification_id')
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
            $list_clasifications = Clasification::select('id', 'name')->orderBy("id")->get();
            //  $array_clasifi = [];

            // $clasification_aux = 0;
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
            $total_events = count($list);
            $group_events = Utils::groupArray($resp, 'clasification_id');
            $result = [];
            $ids_cla = [];
            $cont_cla = 0;
            $position = 0;
            $id_aux = 0;
            $aux_obj = new StdClass();
            $aux_obj->id = 0;
            $aux_obj->name = '';
            $aux_obj->count = 0;
            $aux_obj->count_checks = 0;
            $aux_obj->percentage = 0;
            foreach ($list_clasifications as $it) {
                foreach ($group_events as $key => $value) {
                    if ($it->id == $key) {
                        if ($it->id != $id_aux) {
                            /*
                             * no se a anadido al array
                             */
                            $position = Utils::searchArray($result, "id", $it->id, true);
                            if ($position === null) {
                                $id_aux = $it->id;
                                $cont_cla++;
                                $aux_obj->id = $it->id;
                                $aux_obj->name = $it->name;
                                $aux_obj->count = count($value);
                                $aux_obj->count_checks = $this->countEventsCheck($value);
                                $aux_obj->percentage = Utils::calculatePorcentage($aux_obj->count_checks, $aux_obj->count);
                                array_push($result, $aux_obj);
                            } else {
                                $result[$position]->count = count($value);
                                $result[$position]->count_checks = $this->countEventsCheck($value);
                                $result[$position]->percentage = Utils::calculatePorcentage($result[$position]->count_checks, $result[$position]->count);
                            }


                        } else {
                            $cont_cla++;
                            /*
                             * es el mismo
                             */
                            $position = Utils::searchArray($result, "id", $it->id, true);
                            $result[$position]->count = count($value);
                            $result[$position]->count_checks = $this->countEventsCheck($value);
                            $result[$position]->percentage = Utils::calculatePorcentage($result[$position]->count_checks, $result[$position]->count);
                        }


                    } else {
                        $position = Utils::searchArray($result, "id", $it->id, true);
                        if ($position === null) {
                            // $result[$position]->percentage = Utils::calculatePorcentage($result[$position]->count_checks, $cont_cla);
                            // } else {
                            $aux_obj->id = $it->id;
                            $aux_obj->name = $it->name;
                            $aux_obj->count = 0;
                            $aux_obj->count_checks = 0;
                            $aux_obj->percentage = 0;
                            array_push($result, $aux_obj);
                        }

                    }

                    $aux_obj = new StdClass();
                    $aux_obj->id = 0;
                    $aux_obj->name = '';
                    $aux_obj->count = 0;
                    $aux_obj->count_checks = 0;
                    $aux_obj->percentage = 0;
                }
                $id_aux = 0;

                $cont_cla = 0;
            }

            return [
                "group" => $result,
                "percentage" => Utils::calculatePorcentage($cont_events, $total_events),
                "percentage_effecty" => Utils::calculatePorcentage($events_efecty, $cont_events),
                "count_events_effecty" => $events_efecty,
                "count_events" => $total_events
            ];
        } catch (\Exception $e) {
            return response()->json([
                "exception" => $e->getMessage(),
                "file" => $e->getFile(),
                "line" => $e->getLine(),
                "code" => $e->getCode(),
            ],500);
        }

    }

    public function scopeEmails($query, $id)
    {
        return QueryBuilder::for(Email::class)
            ->select('emails.name', 'emails.confirmed', 'emails.created_at')
            ->join('detentions as d', 'emails.detention_id', 'd.id')
            ->where('d.id', $id)
            ->where('emails.deleted', false)
            ->get();
    }

    public function countEventsCheck($events)
    {
        $count_checks = 0;
        foreach ($events as $e) {
            if ($e->check)
                $count_checks++;
        }

        return $count_checks;
    }

    function intersectionArray($clasifications, $array)
    {
        $arr_a = [1, 2, 3];
        //echo $arr_a;

        return array_intersect_uassoc($arr_a, $array, "strcasecmp");
        //array_udiff

    }

    public function scopeEventPivot($query, $id)
    {
        return QueryBuilder::for(Event::class)
            ->select('name', 'date')
            ->where('detention_id', $id)
            ->where('type_id', 1)
            ->first();
    }


}
