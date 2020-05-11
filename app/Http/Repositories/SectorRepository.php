<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:35 PM
 */

namespace App\Http\Repositories;

use App\Core\TatucoRepository;
use App\Models\Sector;
use App\Query\QueryBuilder;

class SectorRepository extends TatucoRepository
{

    public function __construct()
    {
        parent::__construct(new Sector());
    }

    public function index($request = null)
    {
      /*  $list = QueryBuilder::for(Sector::class)
            ->join('type_racks as t', "sectors.type_rack_id", "=","t.id")
            ->select("sectors.id", "sectors.code", "sectors.account_id","sectors.created_at", "t.name AS type_rack", "sectors.high", "sectors.width", "sectors.type_rack_id", "sectors.racks",'sectors.norte','sectors.sur');

        if (isset($_GET['where'])) {
            $list = $list->doWhere($request->where);
        }
        if (isset($_GET['paginate'])) {
            $list = $list->paginate($_GET['paginate']);

        }
        return ["data" => $list->orderBy("created_at", "desc")->get()];*/
//      return [
//          "data" => Sector::all()
//      ];
        return [];
    }

    public function show($id)
    {
        $item = Sector::find($id);
        return [
            "data" => $item/*[
               // "id" => $item->id,
                //"name" => $item->name,
                "high" => $item->high,
                "width" => $item->width,
                "account_id" => $item->account_id,
                "created_at" => $item->created_at,
                "type_rack" => $item->type_racks->name,
                "type_rack_id" => $item->type_rack_id,
                "norte" => $item->norte,
                "sur" => $item->sur,
                "racks" =>  $item->racks
            ]*/
        ];
    }

}
