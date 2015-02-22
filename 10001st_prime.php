<?php

function prime_check ($k) {

	$i = intval(sqrt($k)) + 1;
	$count = 0;
	$prime = 0;

	while ($i>1){

		if ($k%$i == 0){
			$count++;
		}

		$i--;
	}

	if ($count < 1) {
		$prime = 1;
	}
		
	else if ($k === 2) {
		$prime = 1;
	}
	else
		$prime = 0;

	return $prime;
}

$limit = 0;
$i = 3; // Starting from 3 as this is the first odd prime number and the addition can be made easier

while ($limit < 10000) { // we are using only 10000 as we have excluded 2
	
	if (prime_check($i)) {
		
		$limit++;
		
	}
	
	$i=$i+2; // We are incrementing by 2 as all primes apart from 2 are odd (or so we think)
	
}
$i = $i-2; // $i will have been inremented by two when it gets to here which is the prime number added two
echo $i."<br>";

?>