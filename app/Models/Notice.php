<?php

namespace App\Models;

use App\Core\Utils;
use Illuminate\Database\Eloquent\Model;
use App\Core\TatucoModel;
use Illuminate\Support\Facades\Auth;

class Notice extends TatucoModel
{
    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'description',
        'deleted',
        'image'
        ];

    public function setUserIdAttribute($value)
    {

        if(!$value)
            $value = Auth::id();

        $this->attributes['user_id'] = $value;
    }

}
