/**
 * Problem 3, Largest Prime Factor
 * The prime factors of 13195 are 5, 7, 13 and 29.
 * What is the largest prime factor of the number 600851475143 ?
 */



// GoldbachConjecture
var primes=[2];

function nextPrime( prime ){

	var i=prime,
		j=0;


	while(i++){

		if( i%2 && i!==1 ){
			var is_prime = true, g=0;
			for(j=0;j<primes.length;j++){
				if( i%primes[j] === 0 ){
					is_prime = false;
				}
			}
			if(is_prime){
				primes.push(i);
				break;
			}else {

				for(j=0;j<primes.length&&g!==i;j++){
					var k = 0;
					do{
						g = primes[j] + 2*Math.pow(++k,2);
						if(g===i){
							break;
						}
					}
					while(g<i);
				}

				if(g!==i){
					console.log("Crap "+i);
					break;
				}
			}
		}
	}

	return i;
}




var factors = []; // Prime factors
var n = 600851475143;
var prime = 2;

// Iterate through the pime number sequence extracting the prime factors
do{

	console.log("test: " + prime);

	// Is the remainder divisible by this prime?
	if( n%prime === 0 ){
		// Then this is a factor
		factors.push( prime );

		// Console
		console.log( "factor: " + prime );

		// Reset
		n = n/prime;
	}

	if(n!==1){
		// Get the next prime number
		prime = nextPrime( prime );
	}

} while (n!==1);

console.log( factors );
console.log( Math.max.apply( Math, factors ) );

