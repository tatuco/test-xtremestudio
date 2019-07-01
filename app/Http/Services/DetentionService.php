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
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\JWTAuth;

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
            $detention->id = $request->id;
            $detention->name = $request->name;
            $detention->description = $request->has('description') ? $request->description : "";
            $detention->type_id = $request->type_id;
           // $detention->user_create = Auth::id();
            $detention->save();

            $event = new Event();
            $event->name = $request->event_name;
            $event->description = $request->has('event_description') ? $request->event_description : "";
            $event->date = $request->event_date;
            $event->detention_id = $request->id;
            $event->type_id = 1;
            $event->status_id = 3;
            $event->save();

            $resp = Detention::eventWithSubEvents($request->id);
            foreach ($resp["events"] as &$it) {
                    $it->active = false;
            }
            $detention->id = $request->id;
            $detention->events = $resp["events"];
            $detention->percentage = $resp["percentage"];
            $detention->percentage_effecty =  $resp['percentage_effecty'];
            $detention->count_events_effecty = $resp['count_events_effecty'];
            $detention->count_events = $resp['count_events'];
            $detention->active = false;
            return $detention;
        } catch (\Exception $e) {
            //echo $e;
            return parent::errorException($e);
        }
    }

}
