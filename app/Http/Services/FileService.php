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
use App\Http\Repositories\DetentionRepository;
use App\Http\Repositories\FileRepository;
use App\Models\Detention;
use App\Models\Event;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
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
        try{
            $resp_array = [];
            $archivos = $request->archivos;
            foreach ($archivos as $file) {

                file_put_contents($file["directory"], $file["file"]);
                $instance_file =  new UploadedFile($file["directory"], $file["name"]);
                $storagePath = Storage::disk('s3')->put("detenciones/".$request->detention_id, $instance_file, 'public');

                $f = new File();
                $f->name = $file["name"];
                //$f->directory = 'http://192.168.1.219/yoplanifico-api/storage/app/detentions/' . $file["name"];
                $f->directory = env('AWS_URL', 'http://192.168.1.219/yoplanifico-api/storage/app/detentions').'/'.$storagePath;
                $f->type_id = $request->type_id;
                $f->detention_id = $file["detention_id"];
                $f->save();
                array_push($resp_array, $f);
            }
            $item = (new DetentionRepository())->show($request->detention_id); //Detention::files($request->detention_id);
            return $item;

        }catch (\Exception $e){
            //DB::rollBack();
            return $this->errorException($e);
        }

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
           $item = (new DetentionRepository())->show($this->object->detention_id); //Detention::files($request->detention_id);
           return $item;

       } catch (\Exception $e){
           return $this->errorException($e);
       }
   }

    public function fileDestroy($id, $request)
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
            $detention = Detention::find($this->object->detention_id);
            Event::checkSubEvents($this->object->detention_id);
            $resp = Detention::eventWithSubEvents($this->object->detention_id);
            // echo 'id del evento creado => '.$it["id"];
            foreach ($resp["events"] as &$_it) {
                if ($_it->id == $it["id"])
                    $_it->active = true;
                else
                    $_it->active = false;
            }
            $detention->events = $resp["events"];
            $detention->percentage = $resp["percentage"];
            $detention->percentage_effecty =  $resp['percentage_effecty'];
            $detention->count_events_effecty = $resp['count_events_effecty'];
            $detention->count_events = $resp['count_events'];
            $detention->active = true;
            return $detention;
        } catch (\Exception $e){
            return $this->errorException($e);
        }
    }

   public function download($id) {

   }
}
