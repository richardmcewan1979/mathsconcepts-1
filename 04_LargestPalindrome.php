<?php

$num = 0;
$originalnum = 0;
$largestPalindrom = 0;

for ($i = 111; $i<1000; $i++)  {
	
	for($j=111; $j<1000; $j++) {
		
		$rem =0; $rev =0;
		$num=$i*$j;
		$originalnum = $num;
		
		while ($num>1) {
		$rem = $num%10;
		$rev = ($rev*10)+$rem;
		$num = $num/10;
		}
		
		if ($rev === $originalnum){
			
			if ($originalnum > $largestPalindrom)
				$largestPalindrom = $originalnum;
		}
		
	}
}

echo  $largestPalindrom."<br>";

?>