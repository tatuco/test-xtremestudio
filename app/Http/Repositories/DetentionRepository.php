<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:35 PM
 */

namespace App\Http\Repositories;

use App\Core\TatucoRepository;
use App\Http\Services\DateService;
use App\Models\Detention;
use App\Query\QueryBuilder;

class DetentionRepository extends TatucoRepository
{

    public function __construct()
    {
        parent::__construct(new Detention());
    }

    public function index($request = null)
    {
        $list = QueryBuilder::for(Detention::class);

        if(isset($_GET['where']))
        {
            $list = $list->doWhere($request->where);
        }
        if(isset($_GET['paginate']))
        {
            $list = $list->paginate($_GET['paginate']);

        }

        $list = $list->orderBy("created_at", "desc")->get();

        $resp = [];
        foreach ($list as $it) {
            $data = Detention::eventWithSubEvents($it->id);
            $it->events = $data['events'];
            $it->percentage = $data['percentage'];
            array_push($resp, $it);
        }
        return $resp;
    }

}
