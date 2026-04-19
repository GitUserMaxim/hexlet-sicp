<p>Design a machine to compute square roots using Newton's method, as described in section 1.1.7:</p>
<pre><code>(define (sqrt x)
  (define (good-enough? guess)
    (< (abs (- (square guess) x)) 0.001))
  (define (improve guess)
    (average guess (/ x guess)))
  (define (sqrt-iter guess)
    (if (good-enough? guess)
        guess
        (sqrt-iter (improve guess))))
  (sqrt-iter 1.0))</code></pre>
<p>Begin by assuming that 
<code>good-enough?</code>
 and 
<code>improve</code>
 operations are available as primitives. Then show how to expand these in terms of arithmetic operations. Describe each version of the 
<code>sqrt</code>
 machine design by drawing a data-path diagram and writing a controller definition in the register-machine language.
</p>
