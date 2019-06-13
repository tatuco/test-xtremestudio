<?php

namespace App\Models;

use App\Core\Utils;
use App\Http\Services\DateService;
use App\Query\QueryBuilder;
use Illuminate\Database\Eloquent\Model;
use App\Core\TatucoModel;

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


    public function scopeEventWithSubEvents($query, $id ) {

        $list = QueryBuilder::for(Event::class)
            ->where('detention_id', $id)
            ->where('deleted', false)
            ->orderBy('date', 'desc')
            ->get();
        $resp = [];
        $date_pivote = '';
        $percentage = 0;
        $cont_sub_event_complits = 0;
        $cont_events = 0;
        $events_efecty = 0;
        foreach ($list as $it) {
            if ($it->type_id == 1) {
                $date_pivote = $it->date;
                $it->week = DateService::getWeekToYear($it->date);
            } elseif ($it->type_id != 1) {
               // echo 2;
                $it->week = DateService::getWeekEvent($date_pivote, $it->date);
            }
            if ($it->status_id == 1) {
                $events_efecty++;
            }
            $sub_events = Event::subEvents($it->id);
            if ($it->check) {
                $cont_events++;
            }
            foreach ($sub_events as $sb) {
                if ($sb->check)
                    $cont_sub_event_complits++;
            }
            $it->sub_events = $sub_events;
            $it->percentage = Utils::calculatePorcentage($cont_sub_event_complits, count($sub_events));
            $cont_sub_event_complits = 0;
            $date_pivote = '';
            array_push($resp, $it);
        }
        $total_events = count($list);
        return [
                    "events" => $resp,
                    "percentage" => Utils::calculatePorcentage($cont_events, $total_events),
                    "percentage_effecty" =>  Utils::calculatePorcentage($events_efecty, $cont_events),
                    "count_events_effecty" => $events_efecty,
                    "count_events" => $cont_events
                ];
    }




}
