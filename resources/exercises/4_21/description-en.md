<p>Amazingly, Louis's intuition in exercise <a href="{{ route('exercises.show', App\Models\Exercise::findByPath('4.20')) }}">4.20</a>
 is correct. It is indeed possible to specify recursive procedures without using 
<code>letrec</code>
 (or even 
<code>define</code>
), although the method for accomplishing this is much more subtle than Louis imagined. The following expression computes 
<code>10</code>
 factorial by applying a recursive factorial procedure:
</p>
<pre><code>((lambda (n)
   ((lambda (fact)
      (fact fact n))
    (lambda (ft k)
      (if (= k 1)
          1
          (* k (ft ft (- k 1)))))))
 10)</code></pre>
<p>a. Check (by evaluating the expression) that this really does compute factorials. Devise an analogous expression for computing Fibonacci numbers.</p>
<p>b. Consider the following procedure, which includes mutually recursive internal definitions:</p>
<pre><code>(define (f x)
  (define (even? n)
    (if (= n 0)
        true
        (odd? (- n 1))))
  (define (odd? n)
    (if (= n 0)
        false
        (even? (- n 1))))
  (even? x))</code></pre>
<p>Fill in the missing expressions to complete an alternative definition of 
<code>f</code>
, which uses neither internal definitions nor 
<code>letrec</code>
:
</p>
<pre><code>(define (f x)
  ((lambda (even? odd?)
     (even? even? odd? x))
   (lambda (ev? od? n)
     (if (= n 0) true (od? ?? ?? ??)))
   (lambda (ev? od? n)
     (if (= n 0) false (ev? ?? ?? ??)))))</code></pre>
