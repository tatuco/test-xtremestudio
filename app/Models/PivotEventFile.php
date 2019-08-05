<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Core\TatucoModel;

class PivotEventFile extends TatucoModel
{
    protected $guarded = ['id'];

    protected $table = 'pivot_files_events';
}
