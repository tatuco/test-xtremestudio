<?php

namespace App\Models;

use App\Query\QueryBuilder;
use Illuminate\Database\Eloquent\Model;
use App\Core\TatucoModel;

class SubEvent extends TatucoModel
{
    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'description',
        'event_id',
        'check',
        'responsable',
        'date',
        'status_id',
        'date_check'
    ];

    protected $casts = [
        'check' => 'boolean',
    ];

    public function scopeEvent($query, $id)
    {
        return QueryBuilder::for(Event::class)
            ->where('id', $id)
            ->where('deleted', false)
            ->first();
    }
}
