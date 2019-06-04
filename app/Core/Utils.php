<?php


namespace App\Core;


class Utils
{
    static function calculatePorcentage($part, $total)
    {
        $resp = 0;
        if ($part > 0 && $total > 0)
            $resp = ($part / $total) * 100;

        return round($resp, 0);
    }
}
