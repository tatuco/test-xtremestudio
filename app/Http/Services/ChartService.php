<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:33 PM
 */

namespace App\Http\Services;


use App\Core\TatucoService;
use App\Http\Repositories\ChartRepository;
use Carbon\Carbon;
use DateTime;

class ChartService extends TatucoService
{

    protected $name = "chart";
    protected $namePlural = "charts";

    public function __construct()
    {
        parent::__construct(new ChartRepository());
    }

    /**
     * @param $request
     * @return mixed
     */
    public function fte($request)
    {
        $start = Carbon::now()->startOfWeek();
        $end = Carbon::now()->endOfWeek();
        $request->merge(['start' => $start->format('Y-m-d'), 'end' => $end->format('Y-m-d')]);
      //  print_r(['start' => $start, 'end' => $end]);
        $week = DateService::generateDateRange($start, $end, 'Y-m-d');
         $resp = $this->repository->fte($request)->get();

       // $collection = collect($resp);
        $list = [];
        for ($i = 0; $i < count($week); $i++)
        {
          /*  $obj = [
              "name" => $week[$i],
               "value" => count($this->searchDay($resp, 'created_at', $week[$i]))

            ];*/
            array_push($list, count($this->searchDay($resp, 'created_at', $week[$i])));
        }

        return $list;
    }

    public function searchDay($array, $key, $day)
    {
        $result = [];
        foreach ($array as $it)
        {
            $date_x = new Carbon($it[$key]);
            $date_y = new Carbon($day);
            if(DateService::isDate(new DateTime($date_x->format('Y-m-d')), new DateTime($date_y->format('Y-m-d'))))
            {
                array_push($result, $date_x);
            }
        }
        return $result;
    }

    public function searchSubArray($array, $key, $value) {
        foreach ($array as $subarray){
            if (isset($subarray[$key]) && $subarray[$key] == $value)
                    return $subarray;
        }
    }

}