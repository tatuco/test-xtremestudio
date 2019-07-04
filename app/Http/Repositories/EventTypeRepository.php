<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:35 PM
 */

namespace App\Http\Repositories;

use App\Core\TatucoRepository;
use App\Models\EventType;
use App\Query\QueryBuilder;
use Nexmo\Message\Query;

class EventTypeRepository extends TatucoRepository
{

    public function __construct()
    {
        parent::__construct(new EventType());
    }

    public function index($request = null)
    {
       $query = QueryBuilder::for(EventType::class)
            ->where('id', '<>', 1)
            ->get();

        return $query;
    }

}
