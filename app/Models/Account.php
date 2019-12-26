<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Core\TatucoModel;

class Account extends TatucoModel
{
    protected $guarded = ['id'];

    protected $casts = [
        'config' => 'array'
    ];
/*
    public function setConfigAttribute($value)
    {
        $properties = [];

        foreach ($value as $array_item) {
            if (!is_null($array_item['key'])) {
                $properties[] = $array_item;
            }
        }

        $this->attributes['config'] = json_encode($properties);
    }*/
}
