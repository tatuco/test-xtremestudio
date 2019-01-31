<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:35 PM
 */

namespace App\Http\Repositories\Acl;

use App\Core\TatucoRepository;
use App\Models\User;

class UserRepository extends TatucoRepository
{

    public function __construct()
    {
        parent::__construct(new User());
    }

    public function index($request = null)
    {
        if(isset($_GET['paginate']))
            $query = $this->model::doWhere($request)->paginate($_GET['paginate']);
        else
            $query = $this->model::doWhere($request)->get();

        $result = [];
        foreach ($query as $user) {
            $user->person;
            array_push($result, $user);
        }
        return $query;
    }

}