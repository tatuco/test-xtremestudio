<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Core\TatucoModel;

class Probe extends TatucoModel
{
    //protected $guarded = ['id'];
    protected $casts = ["id" => "string", "deleted" => "boolean"];
    public function boxes()
    {
        return $this->hasMany(Box::class);
    }
}
