<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:33 PM
 */

namespace App\Http\Services;


use App\Core\TatucoService;
use App\Core\Utils;
use App\Http\Repositories\FileRepository;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class FileService extends TatucoService
{

    protected $name = "file";
    protected $namePlural = "files";

    public function __construct()
    {
        parent::__construct(new FileRepository());
    }

    public function store(Request $request)
    {
       // $uploadedFile = $request->file('file');
        /*Storage::disk('local')->putFileAs(
            $request->route,
            $request->file,
            $request->name
        );*/
        $resp_array = [];

        //return response()->json(["algo" => $request->archivos]);
        $archivos = $request->archivos;
        foreach ($archivos as $file) {

            $f =  new File();
            $f->name = $file["name"];
            $f->directory = $file["directory"];
            $f->type_id = $file["type_id"];
            $f->detention_id = $file["detention_id"];
            $f->save();

               // $instance_file =  $file = new UploadedFile($file->directory, $file->file);
               // $storagePath = Storage::disk('s3')->put("detenciones", $file->file, 'public');
                file_put_contents($file["directory"], $file["file"]);
                array_push($resp_array, $f);

        }
        return Utils::convert_from_latin1_to_utf8_recursively($resp_array);
    }

}
