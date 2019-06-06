<?php


namespace App\Core;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileService
{
    public function upload(Request $request)
    {
        $uploadedFile = $request->file('file');
        $filename = time().$uploadedFile->getClientOriginalName();

        Storage::disk('local')->putFileAs(
            'files/'.$filename,
            $uploadedFile,
            $filename
        );

        $upload = new Upload;
        $upload->filename = $filename;

        $upload->user()->associate(auth()->user());

        $upload->save();

        return response()->json([
            'id' => $upload->id
        ]);
    }
}
}
