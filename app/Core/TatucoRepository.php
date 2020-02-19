<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:06 PM
 */

namespace App\Core;


use App\Models\Space;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Tymon\JWTAuth\Facades\JWTAuth;

class TatucoRepository
{
    protected $model;
    public $data = [];

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function index($request = null)
    {
      /*  $accountId = env("ACCOUNT_ID", 1);
        $user = JWTAuth::parseToken()->authenticate();
        if ($user->account_id == $accountId) {*/
            if(isset($_GET['paginate']))
                $query = $this->model::doWhere($request)->paginate($_GET['paginate']);
            else
                $query = $this->model::doWhere($request)->get();
   /*     } else {
            if(isset($_GET['paginate']))
                $query = $this->model::doWhere($request)->where("account_id", $user->account_id)->paginate($_GET['paginate']);
            else
                $query = $this->model::doWhere($request)->where("account_id", $user->account_id)->get();
        }*/
        //$where = '?where=[{"op":"eq","field":"account_id","value":1}]';


        return ["data" => $query];
    }

    public function getPag($request)
    {
        $paginate = 10;
        if(isset($_GET['paginate']))
        {
            $paginate = $request->paginate;
        }
        return $paginate;
    }



    public function test($request)
    {

        $query = $this->model::select("*")->doWhere($request->where);

        return $query;
    }

    public function show($id)
    {
        $item = $this->model::find($id);

        return $item;
    }

    public function store($data)
    {


        if (count($this->data) == 0) {
            $this->data = $data->all();
        }
        $new = $this->model::create($this->data);

        return ["data"=> $new];
    }

    public function update($id, $data)
    {

        $object = $this->model::findOrFail($id);
        if (count($this->data) == 0) {
            $this->data = $data->all();
        }
       // echo $id;
        //print_r($this->data);
      //  $object->push();
        if($object->update($this->data))
            return $object;
        else
            return false;

    }

    public function errorException(\Exception $e)
    {
        Log::critical("Error, archivo del peo: {$e->getFile()}, linea del peo: {$e->getLine()}, el peo: {$e->getMessage()}");
        return response()->json([
            "message" => "Error de servidor",
            "exception" => $e->getMessage(),
            "file" => $e->getFile(),
            "line" => $e->getLine(),
            "code" => $e->getCode(),
            // "error" => $this->runError()
        ], 500);
    }

   /* public function exceptionPdo(\Exception $e, $value =  null)
    {

    }*/

   public function select($request, $select)
   {
       $query = $this->model::select($select)
       ->where('deleted', false);
    //    $query = $this->model::doWhere($request);
       return $query;
      // return $this->model::doWhere($request)->get();
   }

    public function saveModel($model, $data)
    {

            if($data instanceof Request)
                $data = $data->all();

            if($new = $model::create($data)){
                return $new;
            }
            return null;


    }

    public static function isValidEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/@.+\./', $email);
    }

    public function mergePivot($object) {
       $pivot = [];
       foreach ($object as $key => $value) {
           if(is_array($value)) {
               foreach ($value as $it => $v) {
                   $object["{$key}_{$it}" ] = $v;
               }
           }
       }
       return $object;
    }

}
