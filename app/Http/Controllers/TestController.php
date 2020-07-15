<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\TestService;

class TestController extends TatucoController
{
    protected $validateStore = [
        'id' => 'required|integer',
    ];

    protected $validateUpdate = [
        'name' => 'required',
        'status' => 'required',
    ];

    public function __construct()
    {
        parent::__construct(new TestService());
    }

    public function getRickAndMortyapi($id, Request $request) {
        return $this->service->getRickAndMortyapi($id);

    }

}
