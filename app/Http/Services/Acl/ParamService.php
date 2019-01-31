<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:33 PM
 */

namespace App\Http\Services\Acl;


use App\Core\TatucoService;
use App\Http\Repositories\Acl\ParamRepository;

class ParamService extends TatucoService
{

    protected $name = "param";
    protected $namePlural = "params";

    public function __construct()
    {
        parent::__construct(new ParamRepository());
    }

}