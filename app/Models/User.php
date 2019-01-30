<?php

namespace App\Models;

use App\Acl\Src\Traits\ShinobiTrait;
use App\Core\TatucoModel as Tatuco;


class User extends Tatuco
{
    use ShinobiTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
