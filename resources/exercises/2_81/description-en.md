<p>Louis Reasoner has noticed that 
<code>apply-generic</code>
 may try to coerce the arguments to each other's type even if they already have the same type. Therefore, he reasons, we need to put procedures in the coercion table to 'coerce' arguments of each type to their own type. For example, in addition to the 
<code>scheme-number->complex</code>
 coercion shown above, he would do:
</p>
<pre><code>(define (scheme-number->scheme-number n) n)
(define (complex->complex z) z)
(put-coercion 'scheme-number 'scheme-number
              scheme-number->scheme-number)
(put-coercion 'complex 'complex complex->complex)
</code></pre>
<p>a. With Louis's coercion procedures installed, what happens if 
<code>apply-generic</code>
 is called with two arguments of type 
<code>scheme-number</code>
 or two arguments of type 
<code>complex</code>
 for an operation that is not found in the table for those types? For example, assume that we've defined a generic exponentiation operation:
</p>
<pre><code>(define (exp x y) (apply-generic 'exp x y))
</code></pre>
<p>and have put a procedure for exponentiation in the 
<code>scheme-number</code>
 package but not in any other package:
</p>
<p>;; following added to 
<code>scheme-number</code>
 package
</p>
<pre><code>(put 'exp '(scheme-number scheme-number)
     (lambda (x y) (tag (expt x y)))) ; using primitive expt
</code></pre>
<p>What happens if we call 
<code>exp</code>
 with two complex numbers as arguments?
</p>
<p>b. Is Louis correct that something had to be done about coercion with arguments of the same type, or does all work correctly as is?</p>
<p>c. Modify 
<code>apply-generic</code>
 so that it doesn't try coercion if the two arguments have the same type.
</p>
