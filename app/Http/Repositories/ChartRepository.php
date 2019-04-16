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
            ->leftJoin('people as p', 'accesses.person_id', 'p.id')
            ->leftJoin('people_companies as pc', 'p.id', 'people_id')
            ->leftJoin('contracts as c', 'pc.contract_id', 'c.id')
            ->select('accesses.id', 'accesses.created_at')
            ->whereBetween('accesses.created_at', [$request->start, $request->end]);
       // echo $query->toSql();
        if ($request->contract_id)
        {
            $query->where('c.id', $request->contract_id);
        }
        return $query;
    }

    public function eecc($request)
    {
        $query = [];
        $query = QueryBuilder::for(Access::class)
            ->leftJoin('people as p', 'accesses.person_id', 'p.id')
            ->leftJoin('people_companies as pc', 'p.id', 'people_id')
            ->leftJoin('contracts as c', 'pc.contract_id', 'c.id')
            ->leftJoin('people_companies as pco', 'pco.contract_id', 'c.id')
            ->select('accesses.id', 'accesses.created_at', 'pco.position_company')
            ->whereBetween('accesses.created_at', [$request->start, $request->end]);
        if ($request->contract_id)
        {
            $query->where('c.id', $request->contract_id);
        }
        return $query;
    }

}
