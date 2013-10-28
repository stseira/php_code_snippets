<?php
//랜덤하게 나오는 숫자로 특정 등급 발생 확률 테스트

$legend_chance_max = PHP_INT_MAX * (1 / 100);
$epic_chance_max = PHP_INT_MAX * (6 / 100);
$evil_chance_max = PHP_INT_MAX * (50 / 100);
//$rare_chance_max = $evil_chance_max + 1;

$l = $p = $e = $r = 0;
for ( $i = 0 ; $i < 100000 ; $i++ ) {
    $random = mt_rand(0, PHP_INT_MAX);
    if ($random <= $legend_chance_max) {
        $l++;
        $category = 'legend';
    }
    else if ($random <= $epic_chance_max) {
        $category = 'epic';
        $p++;
    }
    else if ($random <= $evil_chance_max) {
        $category = 'evil';
        $e++;
    }
    else {
        $category = 'rare';
        $r++;
    }

}

var_dump($l, $p, $e, $r);
