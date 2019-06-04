<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\SubEventService;

class SubEventController extends TatucoController
{
    protected $validateStore = [
        'event_name' => 'required|string|min:5',
        'event_description' => 'string'
    ];
    protected $validateUpdate = ['check' => 'required|boolean'];

    public function __construct()
    {
        parent::__construct(new SubEventService());
    }
}
