<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:33 PM
 */

namespace App\Http\Services;


use App\Core\TatucoService;
use App\Core\Utils;
use App\Http\Repositories\EventRepository;
use App\Models\Detention;
use App\Models\Event;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;

class EventService extends TatucoService
{

    protected $name = "event";
    protected $namePlural = "events";

    public function __construct()
    {
        parent::__construct(new EventRepository());
    }

    public function update($id, Request $request)
    {
        $event = Event::find($id);
        $status_id = 3;
        if (DateService::validateDateEvent($event->date))
            $status_id = 1;
        else
            $status_id = 2;

        $request->merge(["status_id" => $status_id]);
        $resp = parent::update($id, $request);
        $obj = $resp->content();
        $obj = json_decode($obj, true);
        if ($obj["status"] == 200) {
            $it = $obj["event"];
            $detention = Detention::find($it["detention_id"]);
            //if ($it["check"] == 1 )
                Event::checkSubEvents($id);
            $resp = Detention::eventWithSubEvents($it["detention_id"]);
            foreach ($resp["events"] as &$it) {
                if ($it->id == $id)
                    $it->active = true;
                 else
                    $it->active = false;
            }
            $detention->events = $resp["events"];
            $detention->percentage = $resp["percentage"];
            $detention->active = true;
            return $detention;
        } else {
            return $resp;
        }
    }

}
