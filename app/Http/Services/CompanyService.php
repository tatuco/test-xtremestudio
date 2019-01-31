<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:33 PM
 */

namespace App\Http\Services;


use App\Core\TatucoService;
use App\Http\Repositories\CompanyRepository;

class CompanyService extends TatucoService
{

    protected $name = "company";
    protected $namePlural = "companies";

    public function __construct()
    {
        parent::__construct(new CompanyRepository());
    }

}