<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\ContractsService;

class ContractsController extends TatucoController
{
    protected $select = [
      "id",
      "cod_contract",
       "company_id"
    ];

    public function __construct()
    {
        parent::__construct(new ContractsService());
    }
}