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
    static function dateRange($first, $last, $step = '+1 day', $format = 'Y-m-d') {

        $dates = array();
        $current = strtotime($first);
        $last = strtotime($last);

        while( $current <= $last ) {

            $dates[] = date($format, $current);
            $current = strtotime($step, $current);
        }

        return $dates;
    }


    static function daysException($days = [], $date)
    {
        $d = new Carbon($date);
        foreach ($days as $day) {
            foreach ($day as $key => $value)
            {
                if(($d->dayOfWeek == $key) && ($value == true))
                    return true;
            }
        }
        return false;
    }

    static function search_day($dates = [], $day)
    {
        $start = $day[0];
        $end = $day[1];
        foreach ($dates as $d)
        {
            if((self::isDateBetweenDates(new DateTime($start), new DateTime(self::convertDateCalendar($d[0])), new DateTime(self::convertDateCalendar($d[1])))) || (self::isDateBetweenDates(new DateTime($end), new DateTime(self::convertDateCalendar($d[0])), new DateTime(self::convertDateCalendar($d[1])))))
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
        if(($date->getTimestamp() >= $startDate->getTimestamp()) && ($date->getTimestamp() <=  $endDate->getTimestamp()))
            return true;
        else
            return false;
    }

    static function isDate(DateTime $date_a, DateTime $date_b)
    {
        if(($date_a->getTimestamp() === $date_b->getTimestamp()))
            return true;
        else
            return false;
    }
    static function generateDateRange(Carbon $start_date, Carbon $end_date, $format = 'Y-m-d')
    {
        $dates = [];
        for($date = $start_date; $date->lte($end_date); $date->addDay())
        {
            $dates[] = $date->format($format);
        }
        return $dates;
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