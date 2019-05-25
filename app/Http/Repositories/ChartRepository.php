<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:35 PM
 */

namespace App\Http\Repositories;

use App\Core\TatucoRepository;
use App\Models\Access;
use App\Models\Chart;
use App\Models\Person;
use App\Query\QueryBuilder;

class ChartRepository extends TatucoRepository
{

    public function __construct()
    {
        parent::__construct(new Person());
    }

    public function fte($request)
    {
        $query = [];
        $query = QueryBuilder::for(Access::class)
            ->leftJoin('employes as e', 'accesses.employe_id', 'e.id')
            ->leftJoin('people as p', 'e.people_id', 'p.id')
            ->leftJoin('contracts as c', 'e.contract_id', 'c.cod_contract')
            ->select('accesses.id', 'accesses.date_input')
            ->whereBetween('accesses.date_input', [$request->start, $request->end]);
      //  echo $query->toSql();
        if ($request->contract_id)
        {
            $query->where('c.cod_contract', $request->contract_id);
        }
        return $query;
    }

    public function eecc($request)
    {
        $query = [];
        $query = QueryBuilder::for(Access::class)
            ->leftJoin('employes as e', 'accesses.employe_id', 'e.id')
            ->leftJoin('position_companies as pc', 'e.position_company', 'pc.id')
            ->leftJoin('contracts as c', 'e.contract_id', 'c.cod_contract')
            ->select('accesses.id', 'accesses.date_input', 'pc.name')
            ->whereBetween('accesses.date_input', [$request->start, $request->end]);
     //   echo $query->toSql();
        if ($request->contract_id)
        {
            $query->where('c.cod_contract', $request->contract_id);
        }
        return $query;
    }

}
