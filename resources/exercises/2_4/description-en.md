<p>Here is an alternative procedural representation of pairs. For this representation, verify that 
<code>(car (cons x y))</code>
 yields 
<code>x</code>
 for any objects 
<code>x</code>
 and 
<code>y</code>
.
</p>
<pre><code>(define (cons x y)
  (lambda (m) (m x y)))

(define (car z)
  (z (lambda (p q) p)))
</code></pre>
<p>What is the corresponding definition of 
<code>cdr</code>
? (Hint: To verify that this works, make use of the substitution model of section 1.1.5.)
</p>
