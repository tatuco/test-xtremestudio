<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:33 PM
 */

namespace App\Http\Services;


use App\Core\TatucoService;
use App\Http\Repositories\DetentionTypeRepository;

class DetentionTypeService extends TatucoService
{

    protected $name = "detentiontype";
    protected $namePlural = "detentiontypes";

    public function __construct()
    {
        parent::__construct(new DetentionTypeRepository());
    }

}