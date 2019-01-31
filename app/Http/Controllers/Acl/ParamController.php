<?php

namespace App\Http\Controllers\Acl;

use App\Core\TatucoController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Acl\ParamService;

class ParamController extends TatucoController
{
    public function __construct()
    {
        parent::__construct(new ParamService());
    }

}
