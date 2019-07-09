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
use Illuminate\Support\Facades\Auth;

class NoticeRepository extends TatucoRepository
{

    public function __construct()
    {
        parent::__construct(new Notice());
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
