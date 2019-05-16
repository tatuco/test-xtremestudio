<?php

namespace App\Http\Controllers;

use App\Core\TatucoController;
use App\Http\Services\EmployeService;

class EmployeController extends TatucoController
{
    public function __construct()
    {
        parent::__construct(new EmployeService());
    }
}
