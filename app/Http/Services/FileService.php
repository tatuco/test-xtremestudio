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

            file_put_contents($file["directory"], $file["file"]);
            $instance_file =  new UploadedFile($file["directory"], $file["name"]);
            $storagePath = Storage::disk('s3')->put("detenciones/".$file["detention_id"], $instance_file, 'public');
            echo $storagePath;

            $f = new File();
            $f->name = $file["name"];
            //$f->directory = 'http://192.168.1.219/yoplanifico-api/storage/app/detentions/' . $file["name"];
            $f->directory = env('AWS_URL', 'http://192.168.1.219/yoplanifico-api/storage/app/detentions').'/'.$storagePath;
            $f->type_id = $file["type_id"];
            $f->detention_id = $file["detention_id"];
            $f->save();

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


              //file_put_contents($file["directory"], $file["file"]);*
            array_push($resp_array, $f);

        }
        //return Utils::convert_from_latin1_to_utf8_recursively($resp_array);
        $item = Detention::files($request->detention_id);
        return $item;
    }

   public function destroy($id, $request)
   {
       //return parent::destroy($id, $request);
       try {

           $this->object = $this->repository->show($id);

           if (!$this->object) {
               return response()->json([
                   'status' => 404,
                   'message' => $this->name . ' no existe'
               ], 404);
           }
           $storagePath = Storage::disk('s3')->delete(str_replace(env('AWS_URL').'/', '', $this->object->directory));

           $this->object->deleted = true;
           $this->object->update();
           return response()->json([
               'status' => 206,
               'message' => $this->name . ' Eliminado',
               $this->name => $this->object
           ], 206);

       }catch (\Exception $e){
           return $this->errorException($e);
       }
   }
}
