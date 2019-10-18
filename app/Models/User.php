<?php

namespace App\Models;

use App\Acl\Src\Traits\ShinobiTrait;
use App\Core\TatucoModel as Tatuco;
use App\Notifications\ResetPassword;
use Illuminate\Notifications\Notifiable;


class User extends Tatuco
{
    use ShinobiTrait, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'remember_token','date_expiration_password'
    ];

    protected $casts = [
      'temporal' => 'boolean'
    ];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password','date_expiration_password'
    ];

    public function person()
    {
        return $this->belongsToMany('App\Models\Person');
       // return $this->belongsToMany('App\Models\Person', 'people_user', 'user_id', 'people_id');
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }
}
