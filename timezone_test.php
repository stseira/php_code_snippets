<?php

//time zone change

$time = date('Y-m-d H:i:s');
var_dump(strtotime($time));
var_dump($time);
$dt = new DateTime($time);
$utc_timezone = new DateTimeZone("Europe/London");
$dt->setTimezone($utc_timezone);
$stamp = $dt->getTimeStamp();
var_dump($stamp);
$converted_time = $dt->format('Y-m-d H:i:s');
var_dump($converted_time);


?>
