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
        "status_id"
    ];
    protected $casts = [
        'check' => 'boolean'
    ];

    public function scopeSubEvents($query, $id)
    {
        return QueryBuilder::for(SubEvent::class)
            ->where('event_id', $id)
            ->get();
    }
}
