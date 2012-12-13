<?php

$i = 1;
$slot1[$i] = 1;
$slot2 = array();
$starts2 = 2;
$ends2 = 4;
for($i=$starts2;$i<=$ends2;$i++){
	$slot2[$i] = $i;
	$slotlast = $i;
}
$slot3 = array();
$starts3 = 5;
$ends3 = 6;
for($i=$starts3;$i<=$ends3;$i++){
	if($i == $starts3){
		$j = $slotlast;
	}
	$slot3[$i] = 2 * $j;
	$j = 2 * $j; 
}
$result = array();
$result = $slot1 + $slot2 + $slot3;
$limit = 4;
$num = 7;
$length = count($result);
$temp = array_slice($result, $length-$limit, $limit);

for($i=$num;$i<=$num;$i++){
	$result_temp[$i] = array_product($temp);
}

$final = $result + $result_temp;

echo '<pre>';
print_r($final);
?>