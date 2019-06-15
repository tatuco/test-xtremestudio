<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:35 PM
 */

namespace App\Http\Repositories;

use App\Core\TatucoRepository;
use App\Models\Contracts;

class ContractsRepository extends TatucoRepository
{

    public function __construct()
    {
        parent::__construct(new Contracts());
    }

    public function select($request, $select)
    {
        $query = $this->model::select($select);
        if(isset($_GET['company_id']))
        {
            $query->where('company_id', $request->company_id);
        }
        return $query;
    }
}
