<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 8/1/18
 * Time: 12:31 PM
 */

namespace App\Http\Services;

use Carbon\Carbon;
use DateTime;

class DateService
{
    static function dateRange($first, $last, $step = '+1 day', $format = 'Y-m-d')
    {

        $dates = array();
        $current = strtotime($first);
        $last = strtotime($last);

        while ($current <= $last) {

            $dates[] = date($format, $current);
            $current = strtotime($step, $current);
        }

        return $dates;
    }


    static function daysException($days = [], $date)
    {
        $d = new Carbon($date);
        foreach ($days as $day) {
            foreach ($day as $key => $value) {
                if (($d->dayOfWeek == $key) && ($value == true))
                    return true;
            }
        }
        return false;
    }

    static function search_day($dates = [], $day)
    {
        $start = $day[0];
        $end = $day[1];
        foreach ($dates as $d) {
            if ((self::isDateBetweenDates(new DateTime($start), new DateTime(self::convertDateCalendar($d[0])), new DateTime(self::convertDateCalendar($d[1])))) || (self::isDateBetweenDates(new DateTime($end), new DateTime(self::convertDateCalendar($d[0])), new DateTime(self::convertDateCalendar($d[1])))))
                return true;

        }
        return false;
    }

    static function convertDateCalendar($date, $format = 'Y-m-d G:i:s')
    {
        //$currentDateTime = '02-09-2018 11:00 pm';
        $newDateTime = date($format, strtotime($date));
        return $newDateTime;

    }

    static function isDateBetweenDates(DateTime $date, DateTime $startDate, DateTime $endDate)
    {
        if (($date->getTimestamp() >= $startDate->getTimestamp()) && ($date->getTimestamp() <= $endDate->getTimestamp()))
            return true;
        else
            return false;
    }

    static function isDate(DateTime $date_a, DateTime $date_b)
    {
        if (($date_a->getTimestamp() === $date_b->getTimestamp()))
            return true;
        else
            return false;
    }

    static function generateDateRange(Carbon $start_date, Carbon $end_date, $format = 'Y-m-d')
    {
        $dates = [];
        for ($date = $start_date; $date->lte($end_date); $date->addDay()) {
            $dates[] = $date->format($format);
        }
        return $dates;
    }

    static function getWeeks($start, $end, $format = false)
    {
        try {
            $datetime1 = new DateTime($start);
            $datetime2 = new DateTime($end);
            $interval = $datetime1->diff($datetime2);
            /*echo floor(($interval->format('%a') / 7)) . ' semanas con '
                . ($interval->format('%a') % 7) . ' días';*/
            $count = $interval->format('%a') / 7;
            if ($format) {
                if ($datetime1->getTimestamp() >= $datetime2->getTimestamp()) {
                    return 'W+' . $count;
                } elseif ($datetime1->getTimestamp() <= $datetime2->getTimestamp()) {
                    return 'W-' . $count;
                }
            } else
                return $count;
        } catch (\Exception $e) {
            return $e;
        }

    }

    static function getWeekToYear($string_date)
    {
        $date = new DateTime($string_date);
        return $date->format('W');
    }

    static function getWeekEvent($pivote_date, $date_event)
    {
        $date_start = new DateTime($pivote_date);
        $date_end = new DateTime($date_event);
        $signo = '-';
        $diff = 0;
        /*if ($date_start->getTimestamp() >= $date_end->getTimestamp())
        {
                $signo = '+';
        } elseif ($date_start->getTimestamp() <= $date_end->getTimesTamp()) {
            $signo = '-';
        }
        */

        $diff = $date_start->format('W') - $date_end->format('W');
        if ($diff < 0)
            $signo = "+";
        return "W${signo}".abs($diff);
    }

    /*
     * funcion para validar que un evento se esta confirmando dentro o fuera del plazo
     */
    static function validateDateEvent($dt_string)
    {
        $today = date("Y-m-d H:i:s");
        $_today = new DateTime($today);
        $date = new DateTime($dt_string);

        if ($_today->getTimestamp() <= $date->getTimestamp())
            return true;
        else
            return false;
    }

/**
 * @param $day
 * @return array
 *
 * metodo que se trae las horas de un dia tomando en cuanta las propiedades de hora inicio y hora fin setadas en el metodo
 * mergeDays
 */
/*static function getHoursDay($day, $hour_start, $hour_end, $size)
{
    $date_from = new Carbon($day." {$hour_start}");
    $date_to = new Carbon($day." {$hour_end}");
    // $size = 60;

    $date_from->addMinutes(-$size);
    // $targets = ['Hoyo 1','Hoyo 10'];
    $index = $targets[0];

    $a = [];
    while($date_from < $date_to)
    {

        if($date_from < $date_to) {

            $desde = $date_from->addMinutes($size);
            $hasta = new Carbon($desde);
            $hasta->addMinutes($size);
            if(!$search_day($exceptions,
                [
                    $desde->format('Y-m-d H:i:s'),
                    $hasta->format('Y-m-d H:i:s')
                ])) {
                if ($desde < $date_to) {
                    $index = $nextItem($targets, $index);
                    $a = $arrays_push($a, [$index =>
                        [
                            $desde->format('Y-m-d H:i:s'),
                            $hasta->format('Y-m-d H:i:s')
                        ]
                    ]);
                }
            }
        }
    }

    return $a;

}*/
}
