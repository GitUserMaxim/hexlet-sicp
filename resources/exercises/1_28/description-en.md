<p>One variant of the Fermat test that cannot be fooled is called the Miller-Rabin test (Miller 1976; Rabin 1980). This starts from an alternate form of Fermat's Little Theorem, which states that if 
<code>n</code>
 is a prime number and 
<code>a</code>
 is any positive integer less than 
<code>n</code>
, then a raised to the (
<code>n − 1</code>
)st power is congruent to 1 modulo 
<code>n</code>
. To test the primality of a number 
<code>n</code>
 by the Miller-Rabin test, we pick a random number 
<code>a < n</code>
 and raise a to the (
<code>n − 1</code>
)st power modulo 
<code>n</code>
 using the 
<code>expmod</code>
 procedure. However, whenever we perform the squaring step in 
<code>expmod</code>
, we check to see if we have discovered a ``nontrivial square root of 1 modulo 
<code>n</code>
,'' that is, a number not equal to 1 or 
<code>n − 1</code>
 whose square is equal to 1 modulo 
<code>n</code>
. It is possible to prove that if such a nontrivial square root of 1 exists, then 
<code>n</code>
 is not prime. It is also possible to prove that if 
<code>n</code>
 is an odd number that is not prime, then, for at least half the numbers 
<code>a < n</code>
, computing 
<code>a^(n − 1)</code>
 in this way will reveal a nontrivial square root of 1 modulo 
<code>n</code>
. (This is why the Miller-Rabin test cannot be fooled.) Modify the 
<code>expmod</code>
 procedure to signal if it discovers a nontrivial square root of 1, and use this to implement the Miller-Rabin test with a procedure 
<code>miller-rabin-test</code>
 analogous to 
<code>fermat-test</code>
. Check your procedure by testing various known primes and non-primes. Hint: One convenient way to make 
<code>expmod</code>
 signal is to have it return 0.
</p>
