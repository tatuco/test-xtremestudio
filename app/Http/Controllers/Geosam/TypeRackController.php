<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\TypeRackService;
use Tymon\JWTAuth\Facades\JWTAuth;

class TypeRackController extends TatucoController
{
    protected $validateStore = [
        'name' => 'required|string|max:40',
        'quantity' => 'required|integer',
        'floors' => 'integer'
    ];

    public function __construct()
    {
        parent::__construct(new TypeRackService());
    }

    public function store(Request $request)
    {
        if ($request->floors == null) {
            $request->request->remove("floors");
        }
        $user = JWTAuth::parseToken()->authenticate();
        if ($user->account_id !== env("ACCOUNT_ID"))
            $request->merge(["account_id" => $user->account_id]);

        return parent::store($request);
    }
}
