<p>The following procedure computes a mathematical function called Ackermann's function.</p>
<pre><code>(define (A x y)
  (cond ((= y 0) 0)
        ((= x 0) (* 2 y))
        ((= y 1) 2)
        (else (A (- x 1)
                 (A x (- y 1))))))
</code></pre>
<p>What are the values of the following expressions?</p>
<pre><code>(A 1 10)

(A 2 4)

(A 3 3)
</code></pre>
<p>Consider the following procedures, where 
<code>A</code>
 is the procedure defined above:
</p>
<pre><code>(define (f n) (A 0 n))

(define (g n) (A 1 n))

(define (h n) (A 2 n))

(define (k n) (* 5 n n))
</code></pre>
<p>Give concise mathematical definitions for the functions computed by the procedures 
<code>f, g</code>
 and 
<code>h</code>
 for positive integer values of 
<code>n</code>
. For example, 
<code>(k n)</code>
 computes 
<code>5 * n * n</code>
 .
</p>
