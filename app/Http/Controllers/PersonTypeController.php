<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\PersonTypeService;

class PersonTypeController extends TatucoController
{
    public function __construct()
    {
        parent::__construct(new PersonTypeService());
    }
}