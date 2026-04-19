<p>a. Implement the procedure 
<code>pseudoremainder-terms</code>
, which is just like 
<code>remainder-terms</code>
 except that it multiplies the dividend by the integerizing factor described above before calling 
<code>div-terms</code>
. Modify 
<code>gcd-terms</code>
 to use 
<code>pseudoremainder-terms</code>
, and verify that 
<code>greatest-common-divisor</code>
 now produces an answer with integer coefficients on the example in exercise 
<a href="{{ route('exercises.show', App\Models\Exercise::findByPath('2.95')) }}">2.95</a></p>
<p>b. The GCD now has integer coefficients, but they are larger than those of 
<code>P1</code>
. Modify 
<code>gcd-terms</code>
 so that it removes common factors from the coefficients of the answer by dividing all the coefficients by their (integer) greatest common divisor. 
</p>
<p>Thus, here is how to reduce a rational function to lowest terms:</p>
<ul>
    <li>Compute the GCD of the numerator and denominator, using the version of 
        <code>gcd-terms</code>
         from exercise 
        <a href="{{ route('exercises.show', App\Models\Exercise::findByPath('2.96')) }}">2.96</a>
    </li>
    <li>When you obtain the GCD, multiply both numerator and denominator by the same integerizing factor before dividing through by the GCD, so that division by the GCD will not introduce any noninteger coefficients. As the factor you can use the leading coefficient of the GCD raised to the power 
        <code>1 + O1 − O2</code>
        , where 
        <code>O2</code>
         is the order of the GCD and 
        <code>O1</code>
         is the maximum of the orders of the numerator and denominator. This will ensure that dividing the numerator and denominator by the GCD will not introduce any fractions.
    </li>
    <li>The result of this operation will be a numerator and denominator with integer coefficients. The coefficients will normally be very large because of all of the integerizing factors, so the last step is to remove the redundant factors by computing the (integer) greatest common divisor of all the coefficients of the numerator and the denominator and dividing through by this factor. </li>
</ul>
