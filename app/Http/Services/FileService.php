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
use App\Models\Detention;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use SplFileInfo;

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

            $f = new File();
            $f->name = $file["name"];
            //$f->directory = 'http://192.168.1.219/yoplanifico-api/storage/app/detentions/' . $file["name"];
            $f->directory = 'http://yoplanifico.s3-us-west-2.amazonaws.com/detenciones/' . $file["name"];
            $f->type_id = $file["type_id"];
            $f->detention_id = $file["detention_id"];
            $f->save();
            file_put_contents($file["directory"], $file["file"]);
            $instance_file = $file = new UploadedFile($file["directory"], $file["name"]);
            /* Storage::disk('local')->putFileAs(
                 '',
                 $instance_file,
                 $f->name
             );*/
            /**
             * $s3 = AWS::createClient('s3');
            $s3->putObject(array(
            'ACL' => 'public-read',
            'Bucket' => $bucket_url,
            'Key' => $saveas,
            'SourceFile' => $path
            ));
             */

             $storagePath = Storage::disk('s3')->put("detenciones", $instance_file, 'public');
             //echo $storagePath;
              //file_put_contents($file["directory"], $file["file"]);*
            array_push($resp_array, $f);

        }
        //return Utils::convert_from_latin1_to_utf8_recursively($resp_array);
        $item = Detention::files($request->detention_id);
        return $item;
    }

    public function download($request)
    {
        $info = new SplFileInfo("1560356770_ENTREGA DE SISTEMAS.docx");
        //    var_dump($info->getExtension());
        /*return response()->download("http://192.168.1.219/yoplanifico-api/storage/app/detentions/1560356770_ENTREGA DE SISTEMAS.docx", "1560493226_diagrama cargo.PNG", [
            "Content-Type" => "application/" . $info->getExtension()
        ]);*/
        return response()->streamDownload(function () {
            file_get_contents("http://192.168.1.219/yoplanifico-api/storage/app/detentions/1560356770_ENTREGA DE SISTEMAS.docx");
        }, '1560356770_ENTREGA DE SISTEMAS.docx');


    }
}
