<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:33 PM
 */

namespace App\Http\Services;


use App\Core\TatucoService;
use App\Http\Repositories\ProbeRepository;
use App\Models\Box;
use App\Models\Probe;
use App\Models\Project;
use Illuminate\Http\Request;

class ProbeService extends TatucoService
{

    protected $name = "sondaje";
    protected $namePlural = "sondajes";

    public function __construct()
    {
        parent::__construct(new ProbeRepository());
    }

    public function store(Request $request)
    {
        try {
            $sondaje = new Probe();
            $sondaje->id = $request->id;
            $sondaje->name = $request->name;
            $sondaje->account_id = $request->account_id;
            $sondaje->project_id = $request->project_id;
            $sondaje->save();
            if ($request->has('boxes') && count($request->boxes) > 0) {
                foreach ($request->boxes as $b) {
                    $box = new Box();
                    $box->hall = $b->hall;
                    $box->face = $b->face;
                    $box->long = $b->long;
                    $box->width = $b->width;
                    $box->probe_id = $request->id;
                    $box->account_id = $request->account_id;
                    $box->save();
                }
            }

            $item = Project::find($request->project_id);
            $item->probes->where("deleted", false);
            $item->active = true;
            foreach ($item->probes as $it) {
                $it->boxes->where("deleted", false);
                if ($it->id == $request->id)
                {
                    $it->active = true;
                }

            }
           /* $sondaje->id = $request->id;
            $sondaje->boxes;*/
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
            $item = Probe::find($id);

            if (!$item) {
                return response()->json([
                    'status' => 404,
                    'message' => $this->name . ' no existe'
                ], 404);
            }
            $item->deleted = true;
            $item->update();
            $project = Project::find($item->project_id);
            $project->probes->where("deleted", false);
            $project->active = true;
            $i = 0;
            foreach ($project->probes as $it) {
                if ($i == 0)
                {
                    $it->active = true;
                    $i = 1;
                }

                $it->boxes->where("deleted", false);
                if ($it->id == $request->id)
                {
                    $it->active = true;
                }

            }
            return response()->json([
                'status' => 206,
                'message' => $this->name . ' Eliminado',
                'data'=> $project
            ], 206);

        }catch (\Exception $e){
            return $this->errorException($e);
        }
    }

}
