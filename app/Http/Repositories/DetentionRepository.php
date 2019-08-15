<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:35 PM
 */

namespace App\Http\Repositories;

use App\Core\TatucoRepository;
use App\Core\Utils;
use App\Http\Services\DateService;
use App\Models\Detention;
use App\Models\FileType;
use App\Query\QueryBuilder;
use Nexmo\Message\Query;
use stdClass;

class DetentionRepository extends TatucoRepository
{

    public function __construct()
    {
        parent::__construct(new Detention());
    }

    public function index($request = null)
    {
        $list = QueryBuilder::for(Detention::class);

        if (isset($_GET['where'])) {
            $list = $list->doWhere($request->where);
        }
        if (isset($_GET['paginate'])) {
            $list = $list->paginate($_GET['paginate']);

        }

        $list = $list->orderBy("created_at", "desc")->get();

        $resp = [];
        foreach ($list as $it) {
            $data = Detention::eventWithSubEvents($it->id);
            $it->events = $data['events'];
            $it->percentage = $data['percentage'];
            $it->percentage_effecty = $data['percentage_effecty'];
            $it->count_events_effecty = $data['count_events_effecty'];
            $it->count_events = $data['count_events'];
         //   $it->clasifications = $data['group'];
            array_push($resp, $it);
        }
        return $resp;
    }

    public function show($id)
    {

        $files = Detention::files($id);
        $types = FileType::all();//FileType::where('deleted', false)->orderBy('id', 'asc');
        $emails = Detention::emails($id);
        $resp = [];
        //return $types[0];
        /**
         * SELECT ft.id, ft.name,f.id, f.name, f.directory, f.detention_id, f.type_id,
         * CASE
         * WHEN (f.id IS NULL) THEN 'false'
         * ELSE 'true'
         * END AS upload
         * FROM file_types AS ft
         * LEFT OUTER JOIN files f on ft.id = f.type_id;
         */
        /* $list = QueryBuilder::for(FileType::class)
             ->select('file_types.id', 'file_types.name', 'f.id', 'f.name', 'f.directory', 'f.detention_id', 'f.type_id')
             ->selectRaw('CASE WHEN (f.id IS NULL) THEN \'false\' ELSE \'true\' END AS upload')
             ->leftJoin('files as f', 'file_types.id', 'f.id')
             ->get();
         return $list;*/
        foreach ($types as $it) {
            $obj = new stdClass();
            $obj->type_name = $it->name;
            $obj->file_name = '';
            $obj->file_directory = '';
            $obj->detention_id = '';
            $obj->type_id = $it->id;
            $obj->upload = false;
            $obj->file_id = '';
            $obj->created_at = '';

            foreach ($files as $file) {
                if ($it->id == $file->type_id) {
                    $obj->type_name = $it->name;
                    $obj->file_name = $file->name;
                    $obj->file_directory = $file->directory;
                    $obj->detention_id = $file->detention_id;
                    $obj->type_id = $file->type_id;
                    $obj->upload = true;
                    $obj->file_id = $file->id;
                    $obj->created_at = $file->created_at;
                }
            }
            array_push($resp, $obj);
        }
        return ["files" => $resp, "emails" => $emails];
    }

    public function clasifications($request = null)
    {
        $list = QueryBuilder::for(Detention::class);

        if (isset($_GET['where'])) {
            $list = $list->doWhere($request->where);
        }
        if (isset($_GET['paginate'])) {
            $list = $list->paginate($_GET['paginate']);

        }

        $list = $list->orderBy("created_at", "desc")->get();

        $resp = [];
        foreach ($list as $it) {
            $pivot = Detention::eventPivot($it->id);
            $data = Detention::eventWithClasifications($it->id);
            $it->percentage = $data['percentage'];
            $it->percentage_effecty = $data['percentage_effecty'];
            $it->count_events_effecty = $data['count_events_effecty'];
            $it->count_events = $data['count_events'];
            $it->clasifications = $data['group'];
            $it->name_pivote = $pivot->name;
            $it->date_pivote = $pivot->date;

            array_push($resp, $it);
        }
        return $resp;
    }

}
