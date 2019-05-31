<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:33 PM
 */

namespace App\Http\Services;


use App\Core\TatucoService;
use App\Http\Repositories\DetentionRepository;
use App\Models\Detention;
use App\Models\Event;
use Illuminate\Http\Request;

class DetentionService extends TatucoService
{

    protected $name = "detention";
    protected $namePlural = "detentions";

    public function __construct()
    {
        parent::__construct(new DetentionRepository());
    }

    public function store(Request $request)
    {
        try {
            $detention = new Detention();
            $detention->name = $request->name;
            $detention->description = $request->has('description') ? $request->description : "";
            $detention->type_id = $request->type_id;
            $detention->save();

            $event = new Event();
            $event->name = $request->event_name;
            $event->description = $request->has('event_description') ? $request->event_description : "";
            $event->date = $request->event_date;
            $event->out_of_time = $request->has('event_out_of_time') ? $request->event_out_of_time : false;
            $event->is_critical = $request->has('event_is_critical') ? $request->event_is_critical : false;
            $event->is_pivote = $request->has('event_is_pivote') ? $request->event_is_pivote : false;
            $event->detention_id = $detention->id;
            $event->save();
            return response()->json([
                "status" => 201,
                $this->name => $this->object],
                201);
        } catch (\Exception $e) {
            parent::errorException($e);
        }
    }

}
