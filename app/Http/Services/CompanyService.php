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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CompanyService extends TatucoService
{

    protected $name = "company";
    protected $namePlural = "companies";
    protected $array_select = [];
    public function __construct()
    {
        parent::__construct(new CompanyRepository());
    }

    /*public function select(Request $request, $select)
    {
        $resultado = Cache::remember("array_companies", 360, function () use ($request, $select) {
            return parent::select($request, $select);
        });

        return $resultado;
    }*/

}
