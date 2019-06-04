<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:33 PM
 */

namespace App\Http\Services;


use App\Core\TatucoService;
use App\Http\Repositories\EventRepository;
use App\Models\Event;
use Illuminate\Http\Request;

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

        $request->merge(["type_id" => $status_id]);
        return parent::update($id, $request);
    }

}
