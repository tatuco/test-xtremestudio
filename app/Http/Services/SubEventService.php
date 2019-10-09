<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:33 PM
 */

namespace App\Http\Services;


use App\Core\TatucoService;
use App\Http\Repositories\SubEventRepository;
use App\Models\Detention;
use App\Models\Event;
use App\Models\SubEvent;
use Illuminate\Http\Request;

class SubEventService extends TatucoService
{

    protected $name = "subevent";
    protected $namePlural = "subevents";

    public function __construct()
    {
        parent::__construct(new SubEventRepository());
    }

    public function store(Request $request)
    {
        $resp = parent::store($request);
        $obj = $resp->content();
        $obj = json_decode($obj, true);
      //  return $obj["subevent"];
        if ($obj["status"] == 201) {
            $it = $obj["subevent"];

            $event = SubEvent::event($it["event_id"]);
            $detention = Detention::find($event->detention_id);
            $resp = Detention::eventWithSubEvents($event->detention_id);
            foreach ($resp["events"] as &$it) {
                if ($it->id == $request->event_id)
                    $it->active = true;
                else
                    $it->active = false;
            }
            $detention->events = $resp["events"];
            $detention->percentage = $resp["percentage"];
            $detention->percentage_effecty =  $resp['percentage_effecty'];
            $detention->count_events_effecty = $resp['count_events_effecty'];
            $detention->count_events = $resp['count_events'];
            $detention->active = true;
            return $detention;
        } else {
            return $resp;
        }
    }


    public function update($id, Request $request)
    {
        $request->merge(["status_id" => DateService::validateDateEvent($request->date) ? 1 : 2]);
        $resp = parent::update($id, $request);
        $obj = $resp->content();
        $obj = json_decode($obj, true);
        if ($obj["status"] == 200) {
            $it = $obj["subevent"];
            $event = SubEvent::event($it["event_id"]);
            $detention = Detention::find($event->detention_id);
            $resp = Detention::eventWithSubEvents($event->detention_id);
            foreach ($resp["events"] as &$_it) {
                if ($_it->id == $it["event_id"])
                    $_it->active = true;
                else
                    $_it->active = false;
            }
            $detention->events = $resp["events"];
            $detention->percentage = $resp["percentage"];
            $detention->percentage_effecty =  $resp['percentage_effecty'];
            $detention->count_events_effecty = $resp['count_events_effecty'];
            $detention->count_events = $resp['count_events'];
            $detention->active = true;
            return $detention;
        } else {
            return $resp;
        }
    }

    public function destroy($id, $request)
    {
        $resp = parent::destroy($id, $request);
        $obj = $resp->content();
        $obj = json_decode($obj, true);
        $i = 0;
        if ($obj["status"] == 206) {
            $it = $obj["subevent"];
            $event = SubEvent::event($it["event_id"]);
            $detention = Detention::find($event->detention_id);
            $resp = Detention::eventWithSubEvents($event->detention_id);
            foreach ($resp["events"] as &$it) {
                if ($i == 0) {
                    $it->active = true;
                    $i++;
                }
                else
                    $it->active = false;
            }
            $detention->events = $resp["events"];
            $detention->percentage = $resp["percentage"];
            $detention->percentage_effecty =  $resp['percentage_effecty'];
            $detention->count_events_effecty = $resp['count_events_effecty'];
            $detention->count_events = $resp['count_events'];
            $detention->active = true;
            return $detention;
        } else {
            return $resp;
        }
    }

}
