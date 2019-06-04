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
        'event_id'
    ];

    protected $casts = [
        'check' => 'boolean',
    ];
}
