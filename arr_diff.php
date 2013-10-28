<?

//array_diff() test

$a1 = array(1,2,3,4,5,6);
$a2 = array(2,3,4,5,6);

var_dump(array_diff($a1, $a2));
var_dump(array_diff($a2, $a1));
