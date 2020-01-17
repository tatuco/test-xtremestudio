<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\BoxService;

class BoxController extends TatucoController
{
    protected $validateStore = [
        'hall' => 'required|integer',
        'face' => 'required|integer',
        'long' => 'required|integer',
        'width' => 'required|integer',
        'probe_id' => 'required|string',
        'account_id' => 'required|integer',
        'box' => 'required|integer',
        'project_id' => 'required|integer'
    ];

    public function __construct()
    {
        parent::__construct(new BoxService());
    }
}
