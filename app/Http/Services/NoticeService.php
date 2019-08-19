<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:33 PM
 */

namespace App\Http\Services;


use App\Core\ImageService;
use App\Core\TatucoService;
use App\Http\Repositories\NoticeRepository;
use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class NoticeService extends TatucoService
{

    protected $name = "notice";
    protected $namePlural = "notices";

    public function __construct()
    {
        parent::__construct(new NoticeRepository());
    }

    public function store(Request $request)
    {

        $img = $request->image[0];
        $imagen_ = str_replace('data:'.$img['tipo'].';base64,', '', $img['base64textString']);
        $image = ImageService::image($imagen_, 'plazfer', explode("/", $img['tipo'])[1]);

        $instance_file =  new UploadedFile($image['image'], $image['name']);
        $storagePath = Storage::disk('s3')->put("noticias", $instance_file, 'public');

        $request->merge(['image' => env('AWS_URL').'/'.$storagePath, 'directory' => 'luis' ]);
        //echo $request->directory;
        return parent::store($request); // TODO: Change the autogenerated stub
    }

}