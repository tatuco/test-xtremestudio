<?php
/*$datetime1 = new DateTime('2019-06-07');
$datetime2 = new DateTime('2019-06-30');
$interval = $datetime1->diff($datetime2);
echo ($datetime1->format('W')) . ' semana actual';
*/

function validateDateEvent($dt_string)
{
$today = date("Y-m-d H:i:s");
$_today = new DateTime($today);
$date = new DateTime($dt_string);

if ($_today->getTimestamp() <= $date->getTimestamp())
    echo 'si';
else
    echo 'no';
}


validateDateEvent('2019-06-01');
