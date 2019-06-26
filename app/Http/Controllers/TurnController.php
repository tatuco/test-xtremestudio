<?php

namespace App\Http\Controllers;

use App\Core\EmailService;
use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\TurnService;
use Illuminate\Support\Facades\Mail;

class TurnController extends TatucoController
{
    public function __construct()
    {
        parent::__construct(new TurnService());
    }
}
