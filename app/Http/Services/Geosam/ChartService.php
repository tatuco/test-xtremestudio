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

        $week = DateService::generateDateRange($start, $end, 'Y-m-d');
        $resp = $this->repository->fte($request)->get();

        $list = [];
        for ($i = 0; $i < count($week); $i++) {
            $aux = [
                "value" => count($this->searchDay($resp, 'date_input', $week[$i])),
                "name" => $this->setDay($i)
            ];
            array_push($list, $aux);
        }

        $resp = [
            "name" => "Personas en Planta",
            "series" => $list
        ];

        return [$resp];
    }

    public function setDay($day)
    {
        switch ($day) {
            case '0':
                return "Lunes";
            case '1':
                return "Martes";
            case '2':
                return "Miercoles";
            case '3':
                return "Jueves";
            case '4':
                return "Viernes";
            case '5':
                return "Sabado";
            case '6':
                return "Domingo";
        }
    }

    public function eecc($request)
    {
        $start = Carbon::now()->startOfWeek();
        $end = Carbon::now()->endOfWeek();
        $request->merge(['start' => $start->format('Y-m-d'), 'end' => $end->format('Y-m-d')]);
        $resp = $this->repository->eecc($request)->get();
        $week = DateService::generateDateRange($start, $end, 'Y-m-d');
        $list = [];
        $counts = [];
        $newArray = $this->groupArray($resp, 'name');
        //  return $newArray;
        foreach ($newArray as $it => $value) {
           /* for ($i = 0; $i < count($week); $i++) {
                array_push($counts, count($this->searchDay($value, 'date_input', $week[$i])));
            }*/
            $obj = [
                "name" => $it,
                "value" => count($value),
            ];
            //$counts = [];
            array_push($list, $obj);
        }
        return $list;
    }

    public function ages($request)
    {   //18-25 26-35 36-45 mayores de 45
        $a = 0;
        $b = 0;
        $c = 0;
        $d = 0;
        $start = Carbon::now()->startOfWeek();
        $end = Carbon::now()->endOfWeek();
        $request->merge(['start' => $start->format('Y-m-d'), 'end' => $end->format('Y-m-d')]);
        $resp = $this->repository->ages($request)->get();
        foreach ($resp as $it) {
            $age = Carbon::parse($it->date_birth)->age;
            if ($age >= 18 && $age <= 25) {
                $a++;
            } elseif ($age >= 26 && $age <= 35) {
                $b++;
            } elseif ($age >= 36 && $age <= 45) {
                $c++;
            } else {
                $d++;
            }
        }
        return [
            [
                "name" => "18-25 años",
                "value" => $a,
            ],
            [
                "name" => "26-35 años",
                "value" => $b
            ],
            [
                "name" => "36-45 años",
                "value"=> $c
            ],
            [
                "name" => "mayores a 45 años",
                "value" => $d
            ]
        ];
    }

    public function searchDay($array, $key, $day)
    {
        $result = [];
        foreach ($array as $it) {
            $date_x = new Carbon($it[$key]);
            $date_y = new Carbon($day);
            if (DateService::isDate(new DateTime($date_x->format('Y-m-d')), new DateTime($date_y->format('Y-m-d')))) {
                array_push($result, $date_x);
            }
        }
        return $result;
    }

    public function searchItem($array, $key, $value)
    {
        $result = [];
        foreach ($array as $it) {
            if (isset($it[$key]) && $it[$key] == $value) {
                array_push($result, $it);
            }
        }
        return $result;
    }

    public function searchSubArray($array, $key, $value)
    {
        foreach ($array as $subarray) {
            if (isset($subarray[$key]) && $subarray[$key] == $value)
                return $subarray;
        }
    }

    public function groupArray($arr, $group)
    {
        $temp = array();
        foreach ($arr as $key => $value) {
            $groupValue = $value[$group];
            if (!array_key_exists($groupValue, $temp)) {
                $temp[$groupValue] = array();
            }
            $data = $arr[$key];
            $temp[$groupValue][] = $data;
        }
        return $temp;
    }

    public function access12Hours($request) {
        try {
            $day = $this->repository->access12Hours($request)->get();
            $week = $this->repository->accessWeek($request)->get();
            $month = $this->repository->accessMonth($request)->get();
            return ["day" => count($day), "week" => count($week), "month" => count($month)];
        } catch (\Exception $e) {
            return parent::errorException($e);
        }
    }
}
