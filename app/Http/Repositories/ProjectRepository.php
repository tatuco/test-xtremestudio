<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:35 PM
 */

namespace App\Http\Repositories;

use App\Core\TatucoRepository;
use App\Models\Probe;
use App\Models\Project;

class ProjectRepository extends TatucoRepository
{

    public function __construct()
    {
        parent::__construct(new Project());
    }

    public function index($request = null)
    {
        if (isset($_GET['paginate']))
            $query = $this->model::doWhere($request)->paginate($_GET['paginate']);
        else
            $query = $this->model::doWhere($request)->get();


        foreach ($query as $item) {
            $item->probes->where("deleted", false);
            foreach ($item->probes as $it) {
                $it->boxes = Probe::cajas($it->id);
             //   $it->boxes->where("deleted", false);
            }
        }

        return ["data" => $query];

    }

}
