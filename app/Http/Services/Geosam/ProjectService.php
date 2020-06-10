<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:33 PM
 */

namespace App\Http\Services;


use App\Core\TatucoService;
use App\Http\Repositories\ProjectRepository;
use App\Models\Box;
use App\Models\Project;
use App\Models\Probe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProjectService extends TatucoService
{

    protected $name = "project";
    protected $namePlural = "projects";

    public function __construct()
    {
        parent::__construct(new ProjectRepository());
    }

    public function store(Request $request)
    {
        try {
            $project = new Project();
            $project->name = $request->name;
            $project->description = $request->description;
            $project->account_id = $request->account_id;
            $project->save();
            if ($request->has('probes') && count($request->probes) > 0) {
                foreach ($request->probes as $it) {
                    $probe = new Probe();
                    $probe->id = $it->id;
                    $probe->name = $it->name;
                    $probe->account_id = $request->account_id;
                    $probe->project = $project->id;
                    $probe->save();
                    if ($request->has('boxes') && count($request->boxes) > 0) {
                        foreach ($request->boxes as $b) {
                            $box = new Box();
                            $box->hall = $b->hall;
                            $box->face = $b->face;
                            $box->long = $b->long;
                            $box->width = $b->width;
                            $box->sondaje_id = $it->id;
                            $box->account_id = $request->account_id;
                            $box->save();
                        }
                    }
                }
            }
            return response()->json([
                "status" => 201,
                $this->name => $project],
                201);

        } catch (\Exception $e) {
            return $this->errorException($e);
        }
    }

    public function update($id, Request $request)
    {
        try {

            $this->object = $this->repository->show($id);

            if (!$this->object) {
                return response()->json(['status' => 404,
                    'message' => $this->name . ' no existe'
                ], 404);
            }

            if (!$this->repository->update($id, $request)){
                return response()->json([
                    $this->object
                ], 200);
            }
           /* if ($request->has('sondajes') && count($request->sondajes) > 0) {
                foreach ($request->sondajes as $it) {
                    $sondaje = new Probe();
                    $sondaje->id = $it->id;
                    $sondaje->name = $it->name;
                    $sondaje->account_id = $request->account_id;
                    $sondaje->save();
                    if ($request->has('boxes') && count($request->boxes) > 0) {
                        foreach ($request->boxes as $b) {
                            $box = new Box();
                            $box->hall = $b->hall;
                            $box->face = $b->face;
                            $box->long = $b->long;
                            $box->width = $b->width;
                            $box->sondaje_id = $it->id;
                            $box->account_id = $request->account_id;
                            $box->save();
                        }
                    }
                }
            }*/
            return response()->json([
                'status' => 200,
                'message'=>$this->name. ' Modificado',
                $this->name => $this->object
            ], 200)->setStatusCode(200, "Registro Actualizado");

        }catch(\Exception $e){
            return $this->errorException($e);
        }
    }

}
