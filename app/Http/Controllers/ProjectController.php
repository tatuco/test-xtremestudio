<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\ProjectService;

class ProjectController extends TatucoController
{
    protected $validateStore = [
        'name' => 'required|string|max:40',
       // 'description' => 'string',
        'account_id' => 'required|integer'
    ];

    public function __construct()
    {
        parent::__construct(new ProjectService());
    }

}
