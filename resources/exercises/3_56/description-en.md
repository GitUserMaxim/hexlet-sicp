<p>A famous problem, first raised by R. Hamming, is to enumerate, in ascending order with no repetitions, all positive integers with no prime factors other than 
<code>2, 3</code>
, or 
<code>5</code>
. One obvious way to do this is to simply test each integer in turn to see whether it has any factors other than 
<code>2, 3</code>
, and 
<code>5</code>
. But this is very inefficient, since, as the integers get larger, fewer and fewer of them fit the requirement. As an alternative, let us call the required stream of numbers 
<code>S</code>
 and notice the following facts about it.
</p>
<p>• 
<code>S</code>
 begins with 
<code>1</code>
.
</p>
<p>• The elements of 
<code>(scale-streams 2)</code>
 are also elements of 
<code>S</code>
.
</p>
<p>• The same is true for 
<code>(scale-stream S 3)</code>
 and 
<code>(scale-stream S 5)</code>
.
</p>
<p>• These are all the elements of 
<code>S</code>
.
</p>
<p>Now all we have to do is combine elements from these sources. For this we define a procedure 
<code>merge</code>
 that combines two ordered streams into one ordered result stream, eliminating repetitions:
</p>
<pre><code>(define (merge s1 s2)
  (cond ((stream-null? s1) s2)
        ((stream-null? s2) s1)
        (else
         (let ((s1car (stream-car s1))
               (s2car (stream-car s2)))
           (cond ((< s1car s2car)
                  (cons-stream s1car (merge (stream-cdr s1) s2)))
                 ((> s1car s2car)
                  (cons-stream s2car (merge s1 (stream-cdr s2))))
                 (else
                  (cons-stream s1car
                               (merge (stream-cdr s1)
                                      (stream-cdr s2)))))))))
</code></pre>
<p>Then the required stream may be constructed with 
<code>merge</code>
, as follows:
</p>
<pre><code>(define S (cons-stream 1 (merge &lt;??&gt; &lt;??&gt;)))
</code></pre>
<p>Fill in the missing expressions in the places marked 
<code>&lt;??&gt;</code>
 above.
</p>
