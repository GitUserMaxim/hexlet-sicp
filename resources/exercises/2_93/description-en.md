<p>Modify the rational-arithmetic package to use generic operations, but change 
<code>make-rat</code>
 so that it does not attempt to reduce fractions to lowest terms. Test your system by calling 
<code>make-rational</code>
 on two polynomials to produce a rational function
</p>
<pre><code>(define p1 (make-polynomial 'x '((2 1)(0 1))))

(define p2 (make-polynomial 'x '((3 1)(0 1))))

(define rf (make-rational p2 p1))
</code></pre>
<p>Now add 
<code>rf</code>
 to itself, using 
<code>add</code>
. You will observe that this addition procedure does not reduce fractions to lowest terms.
</p>
