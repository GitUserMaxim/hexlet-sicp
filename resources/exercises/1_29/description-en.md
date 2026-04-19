<p>Simpson's Rule is a more accurate method of numerical integration than the method illustrated above. Using Simpson's Rule, the integral of a function 
<code>f</code>
 between 
<code>a</code>
 and 
<code>b</code>
 is approximated as 
</p>
<img class="img-fluid" src="{{ asset("images/exercises/1_29.gif") }}" alt="1.29">
<p>where 
<code>h = (b − a)/n</code>
, for some even integer 
<code>n</code>
, and 
<code>yₖ = f(a + kh)</code>
. (Increasing 
<code>n</code>
 increases the accuracy of the approximation.) Define a procedure 
<code>simpson</code>
 that takes as arguments 
<code>f</code>
, 
<code>a</code>
, 
<code>b</code>
, and 
<code>n</code>
 and returns the value of the integral, computed using Simpson's Rule. Use your procedure to integrate 
<code>cube</code>
 between 0 and 1 (with 
<code>n</code>
 = 100 and 
<code>n</code>
 = 1000), and compare the results to those of the 
<code>integral</code>
 procedure shown above.
</p>
