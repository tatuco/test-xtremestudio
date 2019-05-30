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

class FileService extends TatucoService
{

    protected $name = "file";
    protected $namePlural = "files";

    public function __construct()
    {
        parent::__construct(new FileRepository());
    }

}