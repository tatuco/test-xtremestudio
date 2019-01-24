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
use Illuminate\Support\Facades\Log;

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
              if(isset($_GET['paginate']))
                   $query = $this->model::doWhere($request)->paginate($_GET['paginate']);
              else
                  $query = $this->model::doWhere($request)->get();

        return $query;
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

        return $new;
    }

    public function update($id, $data)
    {

        $object = $this->model::findOrFail($id);
        if (count($this->data) == 0) {
            $this->data = $data->all();
        }
        $object->fill($this->data);
        $object->push();
        if($object)
            return $object;
        else
            return null;

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

   public function select($select)
   {
       $query = $this->model::select($select);
       return $query->get();
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

}