<p>Design a procedure 
<code>solution</code>
 that evolves an iterative exponentiation process that uses successive squaring and uses a logarithmic number of steps, as does 
<code>fast-expt</code>
. (Hint: Using the observation that 
<code>(bⁿ୵²)² = (b²)ⁿ୵²</code>
, keep, along with the exponent 
<code>n</code>
 and the base 
<code>b</code>
, an additional state variable 
<code>a</code>
, and define the state transformation in such a way that the product 
<code>abⁿ</code>
 is unchanged from state to state. At the beginning of the process 
<code>a</code>
 is taken to be 1, and the answer is given by the value of 
<code>a</code>
 at the end of the process. In general, the technique of defining an invariant quantity that remains unchanged from state to state is a powerful way to think about the design of iterative algorithms.)
</p>
