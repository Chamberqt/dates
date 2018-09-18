<?php

$string = 'Давайте устроим встречу 17.09.2018 и потом ещё одну 22.09.18';

echo $string . "<br><br>";

setlocale(LC_ALL, "ru_RU.UTF-8");

$pattern = '|\d{2}\.\d{2}\.\d{2,4}|';

preg_match_all($pattern, $string, $result, PREG_SET_ORDER);

for($i = 0; $i < count($result); $i++){

	$exp = explode(".", $result[$i][0]);
	$date = $exp[1] ."/". $exp[0] ."/". $exp[2];
	$wd = strftime("%a", strtotime($date));

	$res = $result[$i][0];
	$str = str_replace($res, $res . " (" . $wd . ") ", $string);
	$string = $str;
	
};

echo $string;

?>
