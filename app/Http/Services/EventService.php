<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:33 PM
 */

namespace App\Http\Services;


use App\Core\ImageService;
use App\Core\TatucoService;
use App\Core\Utils;
use App\FileEvent;
use App\Http\Repositories\EventRepository;
use App\Models\Detention;
use App\Models\Event;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use function MongoDB\BSON\toJSON;

class EventService extends TatucoService
{

    protected $name = "event";
    protected $namePlural = "events";

    public function __construct()
    {
        parent::__construct(new EventRepository());
    }

    public function store(Request $request)
    {
        $resp = parent::store($request);
        $obj = $resp->content();
        $obj = json_decode($obj, true);
        if ($obj["status"] == 201) {
            $it = $obj["event"];
            $detention = Detention::find($it["detention_id"]);
            Event::checkSubEvents($it["id"]);
            $resp = Detention::eventWithSubEvents($it["detention_id"]);
           // echo 'id del evento creado => '.$it["id"];
            foreach ($resp["events"] as &$_it) {
                if ($_it->id == $it["id"])
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
            $it = $obj["event"];
            $detention = Detention::find($it["detention_id"]);
            Event::checkSubEvents($it["id"]);
            $resp = Detention::eventWithSubEvents($it["detention_id"]);
            // echo 'id del evento creado => '.$it["id"];
            foreach ($resp["events"] as &$_it) {
                if ($i == 0) {
                    $_it->active = true;
                    $i++;
                }
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

    public function assignFileEvent($request)
    {
        $file = $request->file_;

       /* return response()->json([
            'name' => $file["name"],
            'directory' => env('AWS_URL').'/',
            'type_id' => $request->type_id,
            'detention_id' => $request->detention_id,
            'file_event' => true,
        ]);*/
        file_put_contents($file["directory"], $file["file"]);
        $instance_file =  new UploadedFile($file["directory"], $file["name"]);
        $storagePath = Storage::disk('s3')->put("eventos/".$request->detention_id, $instance_file, 'public');

        $f = new File();
        $f->name = $file["name"];
        $f->directory = env('AWS_URL').'/'.$storagePath;
        $f->type_id = 1;
        $f->detention_id = $request->detention_id;
        $f->file_event = true;
        $f->save();

        $fe = new FileEvent();
        $fe->event_id = $request->event_id;
        $fe->file_id = $f->id;
        $fe->save();

        return $f;
    }

}
