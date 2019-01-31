<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Core\TatucoModel;

class Person extends TatucoModel
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsToMany(User::class, 'people_user', 'people_id', 'user_id');
    }
}