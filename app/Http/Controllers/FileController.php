<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\FileService;

class FileController extends TatucoController
{
    protected $validateStore = [
        'file' => 'required|file|max:9024',
        'name' => 'required|string|min:5',
        'directory' => 'required|string|min:10',
        'type_id' => 'required|integer|min:1',
        'detention_id' => 'required|integer|min:1'
    ];

    public function __construct()
    {
        parent::__construct(new FileService());
    }

    public function store(Request $request)
    {
        $uploadedFile = $request->file('file');
        $filename = time().'_'.$uploadedFile->getClientOriginalName();
        $directory = public_path().'/detentions/'.$filename;
        $request->merge([
            'name' => $filename,
            'directory' => $directory
        ]);
        return parent::store($request);
    }
}
