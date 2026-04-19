<p>A univariate polynomial can be divided by another one to produce a polynomial quotient and a polynomial remainder. For example,</p>
<img class="img-fluid" src="{{ asset("images/exercises/2_91.gif") }}" alt="2.91">
<p>Division can be performed via long division. That is, divide the highest-order term of the dividend by the highest-order term of the divisor. The result is the first term of the quotient. Next, multiply the result by the divisor, subtract that from the dividend, and produce the rest of the answer by recursively dividing the difference by the divisor. Stop when the order of the divisor exceeds the order of the dividend and declare the dividend to be the remainder. Also, if the dividend ever becomes zero, return zero as both quotient and remainder.</p>
<p>We can design a 
<code>div-poly</code>
 procedure on the model of 
<code>add-poly</code>
 and 
<code>mul-poly</code>
. The procedure checks to see if the two polys have the same variable. If so, 
<code>div-poly</code>
 strips off the variable and passes the problem to 
<code>div-terms</code>
, which performs the division operation on term lists. 
<code>div-poly</code>
 finally reattaches the variable to the result supplied by 
<code>div-terms</code>
. It is convenient to design 
<code>div-terms</code>
 to compute both the quotient and the remainder of a division. Div-terms can take two term lists as arguments and return a list of the quotient term list and the remainder term list.
</p>
<p>Complete the following definition of 
<code>div-terms</code>
 by filling in the missing expressions. Use this to implement 
<code>div-poly</code>
, which takes two 
<code>poly</code>
 as arguments and returns a list of the 
<code>poly</code>
 quotient and 
<code>poly</code>
 remainder.
</p>
<pre><code>(define (div-terms L1 L2)
  (if (empty-termlist? L1)
      (list (the-empty-termlist) (the-empty-termlist))
      (let ((t1 (first-term L1))
            (t2 (first-term L2)))
        (if (> (order t2) (order t1))
            (list (the-empty-termlist) L1)
            (let ((new-c (div (coeff t1) (coeff t2)))
                  (new-o (- (order t1) (order t2))))
              (let ((rest-of-result
                     &lt;compute rest of result recursively&gt;
                     ))
                &lt;form complete result&gt;
                ))))))
</code></pre>
