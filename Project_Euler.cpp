//============================================================================
// Name        : Project_Euler.cpp
// Author      : igoitom
// Version     :
// Copyright   : Your copyright notice
// Description : Hello World in C++, Ansi-style
//============================================================================

#include <iostream>
#include <math.h>
using namespace std;

int prime_check (long k);

int main() {

	long k = 600851475143;
	long i = sqrt(600851475143) + 1;
	int prime = 0;

	while (i>2) {

		if (k % i == 0) {

			prime = prime_check(i);

			if (prime){
				cout << i << endl;
			}

			prime = prime_check(k/i);

			if (prime) {
				cout << k/i << endl;
			}

		}

		i--;

	}

	cout << "Program completed successfully" << endl;

	return 0;
}

int prime_check (long k) {

        long i = sqrt(k) + 1;
        int count = 0;
        int prime = 0;

        while (i>2){

                if (k%i == 0){
                        count++;
                }

                i--;
        }

        if (count < 1) {
                prime = 1;
        } else
                prime = 0;

        return prime;
}
