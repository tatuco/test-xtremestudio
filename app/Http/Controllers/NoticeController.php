<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\NoticeService;

class NoticeController extends TatucoController
{
    protected $validateStore = [
        'name' => 'required|string|min:5',
        'description' => 'required|string|min:10',
        'image' => 'required|array'
    ];

    public function __construct()
    {
        parent::__construct(new NoticeService());
    }
}
