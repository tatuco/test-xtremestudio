<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\EventService;

class EventController extends TatucoController
{
    protected $validateStore = [
                                'name' => 'required|string|min:5',
                                //'description' => 'string',
                                'date' => 'required|date_format:Y-m-d|after_or_equal:today',
                                'type_id' => 'required|integer',
                                'status_id' => 'required|integer',
                                'detention_id' => 'required|string',
                                'clasification_id' => 'required|integer'
    ];
    protected $validateUpdate = ['check' => 'required|boolean'];

    public function __construct()
    {
        parent::__construct(new EventService());
    }

    public function store(Request $request)
    {
        $request->merge(["status_id" => 3]);
        return parent::store($request);
    }

    public function assignFileEvent(Request $request)
    {
        /*
         * event_id, detention_id,
         */

        $file = $request->file[0];

        $base_clean = str_replace("data:" . $file["tipo"] . ";base64,", "", $file["base64textString"]);
        $_file = base64_decode($base_clean);
        $name = time() . '_' . $file["nombreArchivo"];
        $directory = storage_path() . '\\app\\eventos\\' . $name;
        $dir_amazon = "http://s3.us-west-2.amazonaws.com/yoplanifico/eventos/";
        $obj = [
            'name' => $name,
            'directory' => $directory,
            'file' => $_file,
            'detention_id' => $request->detention_id,
            'aws' => $dir_amazon,
            "type_id" => $request->type_id
        ];
        $request->merge(['file_' => $obj]);
        return $this->service->assignFileEvent($request);
    }
}
