<?php 

//shorten url style 진수 변환

function base_convert_2($num, $b=62){
        $base='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $r = $num  % $b ;
        $res = $base[$r];
        $q = floor($num/$b);
        while ($q) {
            $r = $q % $b;
            $q =floor($q/$b);
            $res = $base[$r].$res;
        }
        return $res;
}

$id_base36 = base_convert_2(90000004534, 36);
var_dump($id_base36);
$id_base10 = intval($id_base36, 36);
var_dump($id_base10);
