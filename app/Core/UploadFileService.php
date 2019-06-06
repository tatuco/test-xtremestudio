<?php


namespace App\Core;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadService
{
    public function upload(Request $request, $dir = 'files')
    {
        $uploadedFile = $request->file('file');
        $filename = time().$uploadedFile->getClientOriginalName();
        // 192.168.1.219
        Storage::disk('local')->putFileAs(
            $dir.'/'.$filename,
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
