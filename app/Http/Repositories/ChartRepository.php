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
use Illuminate\Support\Facades\Cache;

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
        //echo $query->toSql();
        if ($request->contract_id)
        {
            $query->where('c.cod_contract', $request->contract_id);
        }
      /*  $valor_cacheado = Cache::remember('users', 50, function () {
            return User::all();
        });*/
        return $query;
    }

    public function eecc($request)
    {
        $query = QueryBuilder::for(Access::class)
            ->leftJoin('employes as e', 'accesses.employe_id', 'e.id')
            ->leftJoin('position_companies as pc', 'e.position_company', 'pc.id')
            ->leftJoin('contracts as c', 'e.contract_id', 'c.cod_contract')
            ->select('pc.name', 'pc.id')
            ->selectRaw('DATE_FORMAT(accesses.date_input, \'%Y-%m-%d\') AS date_input')
            ->whereBetween('accesses.date_input', [$request->start, $request->end]);
     //   echo $query->toSql();
        if ($request->contract_id)
        {
            $query->where('c.cod_contract', $request->contract_id);
        }
        $query->orderBy('accesses.date_input', 'asc');
        return $query;
    }

    public function ages($request) {
        /*
         *  select accesses.id, accesses.created_at, p.date_birth
            from accesses
                left join employes as e on accesses.employe_id = e.id
                left join people as p on e.people_id = p.id
                left join contracts as c on e.contract_id = c.cod_contract
         */
        $query = QueryBuilder::for(Access::class)
            ->leftJoin('employes as e', 'accesses.employe_id', 'e.id')
            ->leftJoin('people as p', 'e.people_id', 'p.id')
            ->leftJoin('contracts as c', 'e.contract_id', 'c.cod_contract')
            ->select('accesses.id', 'p.date_birth')
            ->whereBetween('accesses.date_input', [$request->start, $request->end]);
     //   echo $query->toSql();
        if ($request->contract_id)
        {
            $query->where('c.cod_contract', $request->contract_id);
        }
        return $query;
    }

    public function access12Hours($request) {
        $query = QueryBuilder::for(Access::class)
            ->leftJoin('employes as e', 'accesses.employe_id', 'e.id')
            ->leftJoin('people as p', 'e.people_id', 'p.id')
            ->leftJoin('contracts as c', 'e.contract_id', 'c.cod_contract')
            ->select('accesses.id', 'accesses.date_input')
            ->whereRaw('accesses.date_input > DATE_SUB(NOW(), INTERVAL 12 HOUR)');
        if ($request->contract_id)
        {
            $query->where('c.cod_contract', $request->contract_id);
        }
        return $query;
    }
}
