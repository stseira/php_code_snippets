<?php

//고정된 특정 값이 입력되면  날짜별로 다른 랜덤한 값이 나오게 하는 스크립트

$uid = 1234567;

$tc = $lc = $pc = $ec = $rc = 0;
for ($i = strtotime('1971-01-01') ; $i <= strtotime('2999-01-01') ; $i += 86400) {

//$seed = mhash(MHASH_SHA512, strval($i + $uid));
$seed = sha1(strval($i + $uid));
$random = hexdec(substr($seed, 0, 15)) % 100;
if ($random < 1) {
  $lc++;
}
else if ($random < 6) {
  $pc++;
}
else if ($random < 50) {
  $ec++;
}
else {
 $rc++;
}
$tc++;
}

var_dump($lc, $pc, $ec, $rc, $tc);
