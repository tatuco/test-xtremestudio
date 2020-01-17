<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:33 PM
 */

namespace App\Http\Services;


use App\Core\TatucoService;
use App\Http\Repositories\BoxRepository;
use App\Models\Box;
use App\Models\Project;
use App\Models\Proyect;
use App\Models\Probe;
use Illuminate\Http\Request;

class BoxService extends TatucoService
{

    protected $name = "box";
    protected $namePlural = "boxes";

    public function __construct()
    {
        parent::__construct(new BoxRepository());
    }

    public function store(Request $request)
    {
        try {
            $box = new Box();
            $box->hall = $request->hall;
            $box->face = $request->face;
            $box->long = $request->long;
            $box->width = $request->width;
            $box->probe_id = $request->probe_id;
            $box->account_id = $request->account_id;
            $box->box = $request->box;
            $box->save();

            $item = Project::find($request->project_id);
            $item->active = true;
            $item->probes->where("deleted", false);
            foreach ($item->probes as $it) {
                $it->boxes = Probe::cajas($it->id);
                if ($it->id == $request->probe_id) {
                    $it->active = true;
                }
            }

            return response()->json([
                "status" => 201,
                $this->name => $item],
                201);

        } catch (\Exception $e) {
            return $this->errorException($e);
        }
    }

    public function destroy($id, $request)
    {
        try {
            $item = Box::find($id);

            if (!$item) {
                return response()->json([
                    'status' => 404,
                    'message' => $this->name . ' no existe'
                ], 404);
            }
            $item->deleted = true;
            $item->update();
            $probe = Probe::find($item->probe_id);
            $project = Project::find($probe->project_id);
            $project->probes->where("deleted", false);
            $project->active = true;
            foreach ($project->probes as $it) {
                $it->boxes = Probe::cajas($it->id);
                if ($it->id == $probe->id)
                {
                    $it->active = true;
                }

            }
            return response()->json([
                'status' => 206,
                'message' => $this->name . ' Eliminado',
                'data' => $project
            ], 206);

        }catch (\Exception $e){
            return $this->errorException($e);
        }
    }
}
