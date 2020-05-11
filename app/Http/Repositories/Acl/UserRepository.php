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
use Tymon\JWTAuth\Facades\JWTAuth;

class UserRepository extends TatucoRepository
{

    public function __construct()
    {
        parent::__construct(new User());
    }

    public function index($request = null)
    {
       /* $accountId = env("ACCOUNT_ID", 1);
        $user = JWTAuth::parseToken()->authenticate();
        if ($user->account_id == $accountId) {*/
        if(isset($_GET['paginate']))
            $query = $this->model::doWhere($request)->paginate($_GET['paginate']);
        else
            $query = $this->model::doWhere($request)->get();

        $result = [];
        foreach ($query as $user) {
          //  $user->person;
            $user->code = count($user->roles) > 0 ? $user->roles[0]->slug : "";
            $user->roleId = count($user->roles) > 0 ? $user->roles[0]->id : "";
            array_push($result, $user);
        }
        return ["data" => $query];
    }

}
