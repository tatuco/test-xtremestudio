<?php

namespace App\Http\Controllers\Acl;

use App\Core\TatucoController;
use App\Http\Services\Acl\RoleService;
use App\Http\Services\Acl\UserService;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Response;
use Illuminate\Support\Collection;
class UserController extends TatucoController
{
    //use RegistersUsers;

    /**
     * UserController constructor.
     * construimos los atributos que usara TatucoController
     */
    public $roleService;
    public $response;
    public function __construct()
    {
        parent::__construct(new UserService());
    }

    public function assignedRole(Request $request)
    {
        $idUser = $request->json(['user']);
        $idRole = $request->json(['role']);
        if(!$user=User::find($idUser)){
            return response()->json([
                'status' => false,
                'message' => 'El usuario no Existe'
            ],404);
        }

        return $this->service->assignedRole($idUser, $idRole);
    }

    public function revokeRole(Request $request, $idUser, $idRole)
    {

        if($this->service->findByItem($idUser)) {
            if ($this->roleService->findByItem($idRole)){
                return $this->service->revokeRole($idUser, $idRole);
            }
            return $this->service->notFound();
        }else{
            return $this->service->notFound('Usuario');
        }
    }

    public function pruebaModel(){
        return (new User)->getModelTatuco();

    }


}
