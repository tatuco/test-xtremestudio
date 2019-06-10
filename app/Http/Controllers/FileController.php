<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\FileService;
use Illuminate\Support\Facades\Validator;

class FileController extends TatucoController
{
    protected $validateStore = [
        'file' => 'required',
     /*   'name' => 'required|string|min:5',
        'directory' => 'required|string|min:10',
        'type_id' => 'required|integer|min:1',*/
        'detention_id' => 'required|string|min:1'
    ];

    public function __construct()
    {
        parent::__construct(new FileService());
    }

    public function store(Request $request)
    {
        $files = $request->files;
        $result = [];
        $countfiles = count($_FILES);
      //  return response()->json(["count" => $countfiles, "FILE"=> $_FILES]);
        foreach ($_FILES as $file) {
            $uploadedFile = $file;
            $filename = time().'_'.$uploadedFile['name'];
            $directory = storage_path().'\\app\\detentions\\'.$request->detention_id.'\\'.$filename;

            $obj = [
                'name' => $filename,
                'directory' => $directory ,
                'route' => "\\detentions\\"
            ];

            array_push($result, $obj);
        }
        return response()->json(["laurita-tierni"=> $result, "cantidad_archivos" => $countfiles]);
       /* $uploadedFile = $request->file('files');
        $filename = time().'_'.$uploadedFile->getClientOriginalName();
        $directory = storage_path().'\\app\\detentions\\'.$request->detention_id.'\\'.$filename;
        $request->merge([
            'name' => $filename,
            'directory' => $directory,
            'route' => "\\detentions\\"
        ]);*/
       $request->merge(['file' => $result[0]]);
        $validator = Validator::make($request->all(), array_merge($this->validateStore, $this->validateDefault));
        if ($validator->fails()) {
            return response()->json([
                $validator->getMessageBag(),
            ], 422);
        }

        return parent::store($request);
    }
}
