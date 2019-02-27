<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\CompanyService;

class CompanyController extends TatucoController
{
    protected $select = [
      "id",
      "name"
    ];

    public function __construct()
    {
        parent::__construct(new CompanyService());
    }
}