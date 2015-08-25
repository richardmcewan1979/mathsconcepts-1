// Using Javascript to sum the arithmetic series
// [using maths rather than summing loops requires very little processing].
//dude!!

var n = (1000 - 1),
	x = 3,
	y = 5,
	nx= Math.floor( n/x ),  // there are 333 values divisible by 3 less than 1000
	ny = Math.floor( n/y ), // there are 199 values divisible by 5 less than 1000
	nxy = Math.floor( n/(x*y) ); // there are 66 values divisible by (5*3) less than 1000,

var r = (x*(nx/2)*(nx+1)) + (y*(ny/2)*(ny+1)) - (x*y*(nxy/2)*(nxy+1));

console.log(r);

// This sums the two arithmatic series using the formula a/2(a-1).
// Then negates the cross over values e.g. 15, 30, 45 which are // counted twice in both arithmetic series.
