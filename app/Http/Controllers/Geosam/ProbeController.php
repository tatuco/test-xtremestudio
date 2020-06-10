<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\ProbeService;

class ProbeController extends TatucoController
{
    protected $validateStore = [
        'name' => 'required|string|max:40',
        'id' => 'required|string',
        'account_id' => 'required|integer',
        'project_id' => 'required|integer'
    ];

    public function __construct()
    {
        parent::__construct(new ProbeService());
    }

}
