<?php
/*$datetime1 = new DateTime('2019-06-07');
$datetime2 = new DateTime('2019-06-30');
$interval = $datetime1->diff($datetime2);
echo ($datetime1->format('W')) . ' semana actual';
*/


$longitud = 8;

$pass = substr(MD5(rand(5, 100)), 0, $longitud);

echo $pass;
