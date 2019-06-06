<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:33 PM
 */

namespace App\Http\Services;


use App\Core\TatucoService;
use App\Http\Repositories\FileRepository;
use Illuminate\Http\Request;
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
        $uploadedFile = $request->file('file');
        Storage::disk('local')->putFileAs(
            $request->directory,
            $uploadedFile,
            $request->name
        );
        return parent::store($request);
    }

}
