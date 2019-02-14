<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\AdmContractsService;

class AdmContractsController extends TatucoController
{
    public function __construct()
    {
        parent::__construct(new AdmContractsService());
    }
}