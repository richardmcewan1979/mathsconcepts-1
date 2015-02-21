<?php
// find all the prime factors of the numbers from 1 to 20
// use this to find the LCM of all of the numbers 
/*
 * To calculate the smallest multiple of a given amount of numbers first find the maximum number
 * all the prime number occur in all thenumbers and multiply all these prime numbers.
 * 
 */ 

// This functions cheks if a number is prime
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

$LCM = 1; 			// Stores themultiples of the 
$highest = 0; $lowest = 0; 	// These two variables are used to identify the minumum and maximum numbers
				// This is purely for future if the code is t be developed to take in values

for ($i=2; $i<21; $i++){ 
	
	$max=0; 		// this variable stores the maximum amount of times a prime factors apears in a number
				// of a given range. eg. the prime factor 2 appears a maximum of 4 times in the range of 
				// 1 - 20 as a prime factor of 16

	if (prime_check($i)){ 	// if a number is prime then check how many times it appears as a prime factor
		
		for ($k=1; $k<21; $k++) {
			
			$num = $k;
			$temp_max = 0;
			
			while ($num%$i === 0) {
				$num=$num/$i;
				$temp_max++;
			}
			
			if ($temp_max > $max)
				$max = $temp_max;
		}
		
		$LCM = $LCM * pow($i, $max);
	}
	$lowest = 1;
	$highest = $i;
}

echo "The lowest common multiple for numbers from ".$lowest." - ".$highest." is: ".$LCM;

?>












