<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\RackService;

class RackController extends TatucoController
{
    public function __construct()
    {
        parent::__construct(new RackService());
    }

    public function updateBox($id, Request $request)
    {
        return $this->service->updateBox($id, $request);
    }
}
