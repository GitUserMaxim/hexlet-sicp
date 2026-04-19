<p>There is a clever algorithm for computing the Fibonacci numbers in a logarithmic number of steps. Recall the transformation of the state variables 
<code>a</code>
 and 
<code>b</code>
 in the 
<code>fib-iter</code>
 process of section 1.2.2: 
<code>a ← a + b</code>
 and 
<code>b ← a</code>
. Call this transformation 
<code>T</code>
, and observe that applying 
<code>T</code>
 over and over again n times, starting with 1 and 0, produces the pair 
<code>Fib(n + 1)</code>
 and 
<code>Fib(n)</code>
. In other words, the Fibonacci numbers are produced by applying 
<code>Tⁿ</code>
, the nth power of the transformation 
<code>T</code>
, starting with the pair 
<code>(1,0)</code>
. Now consider 
<code>T</code>
 to be the special case of 
<code>p = 0</code>
 and 
<code>q = 1</code>
 in a family of transformations 
<code>Tpq</code>
, where 
<code>Tpq</code>
 transforms the pair 
<code>(a,b)</code>
 according to 
<code>a ← bq + aq + ap, b ← bp + aq</code>
. Show that if we apply such a transformation 
<code>Tpq</code>
 twice, the effect is the same as using a single transformation 
<code>Tp′q′</code>
 of the same form, and compute 
<code>p′</code>
 and 
<code>q′</code>
 in terms of 
<code>p</code>
 and 
<code>q</code>
. This gives us an explicit way to square these transformations, and thus we can compute 
<code>Tⁿ</code>
 using successive squaring, as in the 
<code>fast-expt</code>
 procedure. Put this all together to complete the following procedure, which runs in a logarithmic number of steps:
</p>
<pre><code>(define (fib n)
  (fib-iter 1 0 0 1 n))
(define (fib-iter a b p q count)
  (cond ((= count 0) b)
        ((even? count)
         (fib-iter a
                   b
                   &lt;??&gt;      ; compute p'
                   &lt;??&gt;      ; compute q'
                   (/ count 2)))
        (else (fib-iter (+ (* b q) (* a q) (* a p))
                        (+ (* b p) (* a q))
                        p
                        q
                        (- count 1)))))
</code></pre>
