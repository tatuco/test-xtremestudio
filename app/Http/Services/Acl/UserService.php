<?php
namespace App\Http\Services\Acl;

use App\Acl\Src\Models\Role;
use App\Core\TatucoService;
use App\Http\Repositories\Acl\UserRepository;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class UserService extends TatucoService
{
    protected $name = "user";
    protected $namePlural = "users";

    public function __construct()
    {
        parent::__construct(new UserRepository());
    }

    public function index($request)
    {
        $users = parent::index($request);
        foreach ($users as $user) {
            $user->roles = $user->getRoles();
        }
       return $users;

    }

    public function store(Request $request){
        try {
            DB::beginTransaction();
            $pass = bcrypt($request->json(['password']));
            $request->merge(['password' => $pass]);

            $user = User::create($request->all());

            if ($request->json(['role'])) {
                $this->assignedRole($user->id, $request->json(['role']));
            }
            $user->roles = $user->getRoles();
            DB::commit();
            return $user;
        } catch (\Exception $e) {
            DB::rollBack();
            return parent::errorException($e);
        }

    }
    public function update($id,Request $request)
    {
         if($request->json(['password'])){
           $pass = bcrypt($request->json(['password']));
           $request->merge(['password' => $pass]);
        }

        return parent::update($id, $request);
    }

    public function assignedRole($idUser, $idRole)
    {
        try{
            /**
             * antes de asignar el rol, revocar los roles
             */
            $user=User::find($idUser);
            $roles = Role::all();
            $rolesAsigned = [];
            foreach ($roles as $role) {
                $user->revokeRole($role->id);
            }


            $user->assignRole($idRole);

            $user=User::find($idUser);
            $rolesAsigned=$user->getRoles();

            if($rolesAsigned){
                Log::info('Rol Asignado');
                return response()->json([
                    'status'=> true,
                    'message'=> 'role asignado satisfactoriamente. ',
                    'rolesAsigned' => $rolesAsigned
                ], 200);
            }
        }catch (\Exception $e){
            Log::critical("Error, archivo del peo: {$e->getFile()}, linea del peo: {$e->getLine()}, el peo: {$e->getMessage()}");
              return response()->json([
            "message" => "Error de servidor",
            "exception" => $e->getMessage(),
            "file" => $e->getFile(),
            "line" => $e->getLine(),
            "code" => $e->getCode()
            ], 500); 
        }
    }

    public function revokeRole($idUser, $idRole)
    {
        try{
            $user=User::find($idUser);
            if ($user->revokeRole($idRole)){
                $rolesAsigned=$user->getRoles();
                return response()->json([
                    'status' => true,
                    'msj' => 'Role revocado Satisfactoriamente',
                    'rolesAsigned' => $rolesAsigned
                ], 200);
            }else{
                return response()->json([
                    'status' => false,
                    'msj' => 'Error al revocar el rol',
                ], 500);
            }
        }catch(\Exception $e){
            Log::critical("Error, archivo del peo: {$e->getFile()}, linea del peo: {$e->getLine()}, el peo: {$e->getMessage()}");
              return response()->json([
            "message" => "Error de servidor",
            "exception" => $e->getMessage(),
            "file" => $e->getFile(),
            "line" => $e->getLine(),
            "code" => $e->getCode()
            ], 500); 
        }
    }
   
}
