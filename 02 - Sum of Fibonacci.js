var a=0, b=1, r=0;

while(b<4000000){

	var c = b;
	b = a + b;
	a = c;

	if(b%2 === 0){
		r += b;
	}
}
console.log( r );