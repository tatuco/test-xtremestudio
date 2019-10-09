<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\SubEventService;

class SubEventController extends TatucoController
{
    protected $validateStore = [
        'name' => 'required|string|min:5',
       // 'description' => 'string',
        'event_id' => 'required|integer',
        'date' => 'required|date_format:Y-m-d|after_or_equal:today',
        'responsable' => 'required'
    ];
    protected $validateUpdate = ['check' => 'required|boolean'];

    public function __construct()
    {
        parent::__construct(new SubEventService());
    }

    public function store(Request $request)
    {
        $request->merge(["status_id" => 3]);
        return parent::store($request);
    }
}
