<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:33 PM
 */

namespace App\Http\Services;


use App\Core\TatucoService;
use App\Http\Repositories\TypeRackRepository;
use Illuminate\Http\Request;

class TypeRackService extends TatucoService
{

    protected $name = "typerack";
    protected $namePlural = "typeracks";

    public function __construct()
    {
        parent::__construct(new TypeRackRepository());
    }


}
