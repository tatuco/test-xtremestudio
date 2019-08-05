<?php

namespace App\Models;

use App\Query\QueryBuilder;
use Illuminate\Database\Eloquent\Model;
use App\Core\TatucoModel;

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
        "check"
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
            ->get();
    }

    public function scopeCheckSubEvents($query, $id)
    {
        $var = QueryBuilder::for(SubEvent::class)
            ->where('event_id', $id)
            ->update(["check" => 1]);
        if ($var)
            return true;
        else
            return false;

    }
}
