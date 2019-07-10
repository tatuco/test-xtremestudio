<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:35 PM
 */

namespace App\Http\Repositories;

use App\Core\TatucoRepository;
use App\Models\Notice;
use App\Query\QueryBuilder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Mockery\Matcher\Not;

class NoticeRepository extends TatucoRepository
{

    public function __construct()
    {
        parent::__construct(new Notice());
    }

    public function index($request = null)
    {
        if(isset($_GET['paginate']))
            $query = QueryBuilder::for(Notice::class)
                ->select('notices.*', 'u.name as user_name')
                ->join('users as u', 'notices.user_id', 'u.id')
                ->limit(15)
                ->where('notices.deleted', false)
                ->orderBy('notices.created_at', 'desc')
                ->doWhere($request)
                ->paginate($_GET['paginate']);
        else
            $query =QueryBuilder::for(Notice::class)
                ->select('notices.*', 'u.name as user_name')
                ->join('users as u', 'notices.user_id', 'u.id')
                ->limit(15)
                ->where('notices.deleted', false)
                ->orderBy('notices.created_at', 'desc')
                ->doWhere($request)
                ->get();


        foreach ($query as &$it) {
            $diff = Carbon::createFromTimeStamp(strtotime($it->updated_at))->diffForHumans();
            $it->diff_updated = $diff;
        }
        return $query;
    }

    public function store($data)
    {
        $notice = new Notice();
        $notice->name = $data->name;
        $notice->description = $data->description;
        $notice->user_id = Auth::id();
        $notice->save();
        return $notice;

    }

}
