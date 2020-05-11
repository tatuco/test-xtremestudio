<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:33 PM
 */

namespace App\Http\Services;


use App\Core\TatucoService;
use App\Http\Repositories\RackRepository;
use App\Models\Rack;
use Illuminate\Http\Request;

class RackService extends TatucoService
{

    protected $name = "rack";
    protected $namePlural = "racks";

    public function __construct()
    {
        parent::__construct(new RackRepository());
    }

    public function updateBox($id, Request $request)
    {
        try {
            $item = Rack::find($id);
            if (!$item) {
                return response()->json(['status' => 404,
                    'message' => $this->name . ' no existe'
                ], 404);
            }
            $collection = collect($item->boxes);
            $box = [
                "id" => $request->id,
                "width" => $request->width,
                "long" => $request->long,
                "probe" => $request->probe
            ];
            $collection = $collection->map(function ($item) use ($box) {
                if ($item["id"] == $box["id"]) {
                    $item["id"] = $box["id"];
                    $item["width"] = $box["width"];
                    $item["long"] = $box["long"];
                    $item["probe"] = $box["probe"];
                }
                return $item;
            });
           // $item->boxes = $collection;

            if (!$item->update(["boxes" => $collection, "probe"=> $request->probe])) {
                return response()->json([
                    $this->object
                ], 500);
            }
            return response()->json([
                'status' => 200,
                'message' => $this->name . ' Modificado',
                $this->name => $item
            ], 200)->setStatusCode(200, "Registro Actualizado");

        } catch (\Exception $e) {
            return $this->errorException($e);
        }
    }
}
