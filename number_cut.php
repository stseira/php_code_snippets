<?php

// 자리수 축소 예제

$number = 90000029583;
$str_number = strval($number);
var_dump($str_number);
$str_array = str_split($str_number);
$str_array[1] = $str_array[1] == '0' ? '' : $str_array[1];
$str_array[2] = $str_array[2] == '0' ? '' : $str_array[2];

$str_result = implode('', $str_array);
var_dump(intval($str_result));
$str_number[1] = '';
$converted = sprintf('%9d', $number);
var_dump(trim($str_number));
