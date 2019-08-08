<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\ClasificationService;

class ClasificationController extends TatucoController
{
    public function __construct()
    {
        parent::__construct(new ClasificationService());
    }

    protected $select = [
        'id',
        'name'
    ];
}
