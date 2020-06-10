<?php

namespace App\Models;

use App\Query\QueryBuilder;
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

    public function scopeCajas($query, $id)
    {
        return QueryBuilder::for(Box::class)
            ->where('probe_id', $id)
            ->where('deleted', false)
            ->get();
    }
}
