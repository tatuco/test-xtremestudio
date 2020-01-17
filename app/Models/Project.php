<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Core\TatucoModel;

class Project extends TatucoModel
{
    protected $guarded = ['id'];

    public function probes()
    {
        return $this->hasMany(Probe::class);
    }
}
