<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Core\TatucoModel;

class Company extends TatucoModel
{
    protected $guarded = ['id'];

    protected $cast = [
        'id' => 'string'
    ];
}