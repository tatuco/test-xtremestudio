<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileEvent extends Model
{
    protected $table = 'pivot_files_events';

    protected $fillable = [
      'file_id', 'event_id'
    ];
}
