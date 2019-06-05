<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:06 PM
 */

namespace App\Core;


use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TatucoService
{

    protected $model;
    protected $object;
    protected $name = "item";
    protected $namePlural = "items";
    protected $paginate = false;
    protected $limit = null;
    protected $data = [];
    protected $request;
    protected $dato;
    protected $repository;

    public function __construct($repository)
    {
        $this->repository = $repository;
    }

    public function test($request)
    {
        return $this->repository->test($request)->get();
    }

    public function index($request){
        try{

                $query = $this->repository->index($request);
               // Log::info("{$query}");
                /*if(!$query)
                {
                    return response()->json([
                        "status" => 200,
                        "message"=> "no hay registros",

                    ], 200);
                }*/

                return $query;

        }catch (\Exception $e){
            return $this->errorException($e);
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     * consultar un registro por medio de un id
     */
    public function show($id, $request = null)
    {
        try{

            $this->data = $this->repository->show($id);

            if(!$this->data)
            {
                return response()->json([
                    "status" => 404,
                    'message'=>$this->name. ' no existe'
                ], 404);
            }


            Log::info('Encontrado');

            return response()->json([
                $this->name => $this->data,
            ], 200);

        }catch (\Exception $e){
            return $this->errorException($e);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonRespon
     * guardar un registro nuevo
     */
    public function store(Request $request)
    {
        try{
            //DB::beginTransaction();
            Log::info('Guardado');
            if($this->object = $this->repository->store($request)){
              //  DB::commit();
                return response()->json([
                    "status" => 201,
                    $this->name => $this->object],
                    201);
            }

        }catch (\Exception $e){
            //DB::rollBack();
            return $this->errorException($e);
        }
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * acualizar registro
     */
    public function update($id, Request $request)
    {
        try {

            $this->object = $this->repository->show($id);

            if (!$this->object) {
                return response()->json(['status' => 404,
                    'message' => $this->name . ' no existe'
                ], 404);
            }
          //  $this->data = $request->all();


            if (!$this->repository->update($id, $request)){
                return response()->json([
                        $this->object
                ], 200);
            }
            return response()->json([
                'status' => 200,
                'message'=>$this->name. ' Modificado',
                $this->name => $this->object
            ], 200)->setStatusCode(200, "Registro Actualizado");

        }catch(\Exception $e){
            return $this->errorException($e);
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     * metodo para eliminar un registro
     */
    public function destroy($id, $request)
    {
        try {

            $this->object = $this->repository->show($id);

            if (!$this->object) {
                return response()->json([
                    'status' => 404,
                    'message' => $this->name . ' no existe'
                ], 404);
            }
            $this->object->deleted = true;
            $this->object->update();
            return response()->json([
                'status' => 206,
                'message' => $this->name . ' Eliminado'
            ], 206);

        }catch (\Exception $e){
            return $this->errorException($e);
        }
    }

    /**
     * @param $id
     * @return bool
     * metodo para verificar si un registro existe o no
     * con el fin de devolver una respuesta de no encontrado
     */
    public function findByItem($id)
    {
        if(!$this->model->find($id))
            return false;
        else
            return true;
    }

    /**
     * @param null $item
     * @return \Illuminate\Http\JsonResponse
     * respuesta de no encontrado en formato json
     * puede recibir un string para escificar que cosa no se encontro
     */
    public function notFound($item = null)
    {
        return response()->json([
            'message'=> $item.' No Encontrado'
        ],404);
    }


    public function errorException(\Exception $e)
    {
        Log::critical("Error, archivo del peo: {$e->getFile()}, linea del peo: {$e->getLine()}, el peo: {$e->getMessage()}");
        return response()->json([
            'status' => 500,
            "message" => "Error de servidor",
            "exception" => $e->getMessage(),
            "file" => $e->getFile(),
            "line" => $e->getLine(),
            "code" => $e->getCode(),
           // "error" => $this->runError()
        ], 500);
    }


    public function runError()
    {
        $dir = __DIR__;
        $salida = shell_exec('mpg123 '.__DIR__.'/sonidos/error500.mp3');
        echo $salida;
    }

    public function getNow()
    {
        return Carbon::now()->format('Y-m-d H:i:s');
    }

    public function select(Request $request,$select)
    {
        return $this->repository->select($request, $select)->get();
    }

    function isDateBetweenDates(DateTime $date, DateTime $startDate, DateTime $endDate) {
        if(($date->getTimestamp() >= $startDate->getTimestamp()) && ($date->getTimestamp() <=  $endDate->getTimestamp()))
            return true;
        else
            return false;
    }



}
