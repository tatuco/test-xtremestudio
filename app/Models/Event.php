<?php

namespace App\Models;

use App\Http\Services\DateService;
use App\Query\QueryBuilder;
use Illuminate\Database\Eloquent\Model;
use App\Core\TatucoModel;
use test\Mockery\SubclassWithFinalWakeup;

class Event extends TatucoModel
{
    protected $guarded = ['id'];
    protected $fillable = [
        "name",
        "description",
        "date",
        "type_id",
        "status_id",
        "detention_id",
        "check",
        "clasification_id",
        "responsable",
        "event_type",
        "date_check"
    ];
    protected $casts = [
        'check' => 'boolean'
    ];

    public function scopeSubEvents($query, $id)
    {
        return QueryBuilder::for(SubEvent::class)
            ->where('event_id', $id)
            ->where('deleted', false)
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function scopeFiles($query, $id)
    {
        return QueryBuilder::for(PivotEventFile::class)
            ->select('f.*')
            ->join('files as f', 'f.id', 'pivot_files_events.file_id')
            ->where('event_id', $id)
            ->where('deleted', false)
            ->get();
    }

    public function scopeCheckSubEvents($query, $id)
    {
        $var = QueryBuilder::for(SubEvent::class)
            ->where('event_id', $id)
            ->where('check', 0)
            ->get();

        foreach ($var as $it) {
            $sub = SubEvent::find($it->id);
            $sub->status_id =  DateService::validateDateEvent($it->date) ? 1 : 2;
            $sub->check = 1;
            $sub->date_check = DateService::GetDateTime();
            $sub->update();
        }

            //update(["check" => 1, 'status_id' => DateService::validateDateEvent($date) ? 1 : 2]);
        if ($var)
            return true;
        else
            return false;

    }
}
