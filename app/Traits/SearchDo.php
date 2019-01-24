<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 07/09/18
 * Time: 04:19 PM
 */

namespace App\Traits;


use App\Query\QueryBuilder;

trait SearchDo
{
    public function getModel($model, $request) {


        $list = QueryBuilder::for($model)
            ->select($this->getColumns($request))
            ->doJoin($this->getJoins($request))
            ->doWhere($this->getWhere($request))
            ->sort($this->getSort($request));

        return $list;
    }

    public function getPag($request)
    {
        $paginate = 10;
        if(isset($_GET['paginate']))
        {
            $paginate = $request->paginate;
        }
        return $paginate;
    }

    public function getJoins($request)
    {
        $joins = null;
        if(isset($_GET['join']))
        {
            $joins = $request->join;
        }
        return $joins;
    }

    public function getSort($request)
    {
        $sort = null;
        if(isset($_GET['sort']))
        {
            $sort = $request->sort;
        }
        return $sort;
    }

    public function getColumns($request)
    {
        $columns = ['*'];
        if(isset($_GET['columns']))
        {
            $c = json_decode($request->columns);
            $columns = $c;
        }

        return $columns;
    }

    public function getWhere($request)
    {
        $where = null;
        if(isset($_GET['where']))
        {

            $where = $request->where;
        }

        return $where;
    }
}