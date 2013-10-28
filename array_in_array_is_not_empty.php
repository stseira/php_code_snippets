<?php

//빈 배열 안에 빈 배열이 들어있을 때 empty() 일까?
$var = array(array());
var_dump(empty($var));
