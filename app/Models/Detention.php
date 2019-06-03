<?php

namespace App\Models;

use App\Http\Services\DateService;
use App\Query\QueryBuilder;
use Illuminate\Database\Eloquent\Model;
use App\Core\TatucoModel;

class Detention extends TatucoModel
{
    protected $guarded = ['id'];

    public function scopeEvents($query, $id)
    {
        return QueryBuilder::for(Event::class)
            ->where('detention_id', $id)
            ->get();
    }

    public function scopeEventWithSubEvents($query, $id ) {
        $list = QueryBuilder::for(Event::class)
            ->where('detention_id', $id)
            ->get();
        $resp = [];
        $date_pivote = '';
        foreach ($list as $it) {
            if ($it->type_id == 1) {
                $date_pivote = $it->date;
                $it->week = DateService::getWeekToYear($it->date);
            } elseif ($date_pivote != '') {
                $it->week = DateService::getWeekEvent($date_pivote, $it->date);
            }
            $it->sub_events = Event::subEvents($it->id);
            array_push($resp, $it);
        }

        return $resp;
    }


}
