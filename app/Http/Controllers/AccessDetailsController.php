<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\AccessDetailsService;

class AccessDetailsController extends TatucoController
{
    public function __construct()
    {
        parent::__construct(new AccessDetailsService());
    }
}