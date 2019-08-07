<?php

namespace App\Http\Controllers;

use App\Core\EmailService;
use App\Core\Utils;
use App\Models\Detention;
use App\Models\Email;
use App\Models\File;
use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\FileService;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FileController extends TatucoController
{
    protected $validateStore = [
        //'file' => 'required',
        /*   'name' => 'required|string|min:5',
           'directory' => 'required|string|min:10',
           'type_id' => 'required|integer|min:1',*/
        // 'detention_id' => 'required|string|min:1'
    ];

    public function __construct()
    {
        parent::__construct(new FileService());
    }

    public function store(Request $request)
    {
        $files = $request->file;
        $result = [];
        foreach ($files as $file) {
            $base_clean = str_replace("data:" . $file["tipo"] . ";base64,", "", $file["base64textString"]);
            $_file = base64_decode($base_clean);
            $name = time() . '_' . $file["nombreArchivo"];
            $directory = storage_path() . '\\app\\detentions\\' . $name;
            $dir_amazon = "http://s3.us-west-2.amazonaws.com/yoplanifico/detenciones/";
            $obj = [
                'name' => $name,
                'directory' => $directory,
                'file' => $_file,
                'detention_id' => $request->detention_id,
                'aws' => $dir_amazon,
                "type_id" => $request->type_id
            ];

            array_push($result, $obj);
        }

        //return response()->json(["laurita-tierni"=> $result, "cantidad_archivos" => $countfiles]);
        /* $uploadedFile = $request->file('files');
         $filename = time().'_'.$uploadedFile->getClientOriginalName();
         $directory = storage_path().'\\app\\detentions\\'.$request->detention_id.'\\'.$filename;
         $request->merge([
             'name' => $filename,
             'directory' => $directory,
             'route' => "\\detentions\\"
         ]);*/
        // return response()->json(["res" => Utils::convert_from_latin1_to_utf8_recursively($result)]);
        $request->merge(["archivos" => $result]);
        $validator = Validator::make($request->all(), array_merge($this->validateStore, $this->validateDefault));
        if ($validator->fails()) {
            return response()->json([
                $validator->getMessageBag(),
            ], 422);
        }
        return parent::store($request);
    }

    public function email(Request $request)
    {
        $detention = Detention::find($request->detention_id);
       // $files = Detention::filesWithType($request->detention_id)->toArray();
        $user = Auth::user();
        $token = \JWTAuth::getToken();
     /*   $data = [
            'detention_id' => $detention->id,
            'detention_name' => $detention->name,
            'detention_description' => $detention->description,
            'files' => $files,
            'user_name' => $user->name
        ];*/
        $resp = EmailService::send(["url" => 'http://localhost:8000/api/detentions?token='.$token], env('MAIL_USERNAME'), $request->emails, 'emails.click_workpack', 'Plazfer', 'WorkPack ' . $request->detention_id);
        $obj = $resp->content();
        $obj = json_decode($obj, true);
        if ($obj["status"] == 200) {
            foreach ($request->emails as $it) {
                $email = new Email();
                $email->name = $it;
                $email->detention_id = $request->detention_id;
                $email->save();
            }
        }
        return $resp;
    }

    public function viewWorkPack($id, Request $request)
    {
        $detention = Detention::find($id);
        if (!$detention) {
            $data = [
                'detention_id' => '',
                'detention_name' => '',
                'detention_description' => '',
                'files' => [],
                'user_name' => 'Luis'
            ];
        } else {
            //$files = Detention::files($request->detention_id)->toArray();
            $files = Detention::filesWithType($id)->toArray();
            $user = Auth::user();
            $data = [
                'detention_id' => $detention->id,
                'detention_name' => $detention->name,
                'detention_description' => $detention->description,
                'files' => $files,
                'user_name' => 'Luis'
            ];
        }

        return view('emails.workpack', $data);
    }

    public function download($id)
    {
        $file = File::find($id);
     //   $s3_file = Storage::disk('s3')->get($file->directory);
     //   $s3 = Storage::disk('public');
      //  $s3->put("./".$file->name, $s3_file);
      //  return str_replace(env('AWS_URL'),'', $file->directory);
        $contents = Storage::disk('s3')->get(str_replace(env('AWS_URL').'/', '', $file->directory));
        $tempFile = "temp.pdf";
        file_put_contents($tempFile, $contents);

        header("Content-type: MIME");
        header("Content-Length: " . filesize($tempFile));
        readfile($tempFile);
    }

    function getFilePathAttribute($value)
    {
        $disk = Storage::disk('s3');
        if ($disk->exists($value)) {
            $command = $disk->getDriver()->getAdapter()->getClient()->getCommand('GetObject', ['Bucket' => Config::get('filesystems.disks.s3.bucket'), 'Key' => $value, 'ResponseContentDisposition' => 'attachment;']);
            $request = $disk->getDriver()->getAdapter()->getClient()->createPresignedRequest($command, '+5 minutes');
            return (string)$request->getUri();
        }
        return $value;
    }

    function fileDestroy($id, $event, Request $request)
    {
        return $this->service->fileDestroy($id, $event, $request);
    }
}
