<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Core\TatucoModel;

class Company extends TatucoModel
{
    protected $guarded = ['id'];
    protected $fillable = ['id', 'logo', 'slogan', 'name', 'description', 'deleted'];
    protected $cast = [
        'id' => 'string'
    ];

    public function getIdAttribute($value)
    {
        return (string) $value;
    }
}