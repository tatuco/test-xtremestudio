<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\ChartService;
use Symfony\Component\Routing\Matcher\RedirectableUrlMatcher;

class ChartController extends TatucoController
{
    public function __construct()
    {
        parent::__construct(new ChartService());
    }

    public function fte(Request $request)
    {
        return $this->service->fte($request);
    }

    public function eecc(Request $request)
    {
        return $this->service->eecc($request);
    }

    public function ages(Request $request)
    {
        return $this->service->ages($request);
    }

    public function access12Hours(Request $request)
    {
        return$this->service->access12Hours($request);
    }
}
