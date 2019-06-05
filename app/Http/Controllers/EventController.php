<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\EventService;

class EventController extends TatucoController
{
    protected $validateStore = [
                                'name' => 'required|string|min:5',
                                'description' => 'string',
                                'date' => 'required|date_format:Y-m-d|after_or_equal:today',
                                'type_id' => 'required|integer',
                                'status_id' => 'required|integer',
                                'detention_id' => 'required|string'
    ];
    protected $validateUpdate = ['check' => 'required|boolean'];

    public function __construct()
    {
        parent::__construct(new EventService());
    }

    public function store(Request $request)
    {
        $request->merge(["status_id" => 3]);
        return parent::store($request);
    }
}
