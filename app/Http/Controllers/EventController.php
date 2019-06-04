<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\EventService;

class EventController extends TatucoController
{
    protected $validateStore = [
                                'event_name' => 'required|string|min:5',
                                'event_description' => 'string',
                                'event_date' => 'required|date_format:Y-m-d|after_or_equal:today',
                                'type_id' => 'required|integer'
                                ];
    protected $validateUpdate = ['check' => 'required|boolean'];

    public function __construct()
    {
        parent::__construct(new EventService());
    }
}
