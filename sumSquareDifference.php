<?php

$sum_sq = 0;
$sq_sum = 0;

for ($i=0; $i<101; $i++){
	
	$sum_sq = $sum_sq + pow($i, 2);
	$sq_sum = $sq_sum + $i;
	
	
}

$sq_sum = pow($sq_sum, 2);

echo $sq_sum - $sum_sq;

?>