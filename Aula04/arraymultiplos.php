<?php

echo "<pre>";

$temp=[

	2018 => [
			
			"Janeiro" => 28,
			"Fevereiro" => 29,
			"Março" => 28
	],
	2017 => [
		'Janeiro' => 27,
		'Fevereiro' => 26,
		'Março' => 30
	]


];

print_r($temp);
echo "<hr>";
print_r($temp ['2017']);
echo "<hr>";
print_r($temp ['2017']['Fevereiro']);


?>