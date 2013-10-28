<?php


$str = "asod%##f from aefiawefoj123123*%%!@awe to aweofjwaeoj18542";
preg_match('/from(\w+)to/', $str, $match);
var_dump($match);
preg_match('/from.+to/', $str, $match2);
var_dump($match2);
