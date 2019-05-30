<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:33 PM
 */

namespace App\Http\Services;


use App\Core\TatucoService;
use App\Http\Repositories\SubEventRepository;

class SubEventService extends TatucoService
{

    protected $name = "subevent";
    protected $namePlural = "subevents";

    public function __construct()
    {
        parent::__construct(new SubEventRepository());
    }

}