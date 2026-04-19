<p>Give all possible values of 
<code>x</code>
 that can result from executing
</p>
<pre><code>(define x 10)

(parallel-execute (lambda () (set! x (* x x)))
                  (lambda () (set! x (* x x x))))
</code></pre>
<p>Which of these possibilities remain if we instead use serialized procedures:</p>
<pre><code>(define x 10)

(define s (make-serializer))

(parallel-execute (s (lambda () (set! x (* x x))))
                  (s (lambda () (set! x (* x x x)))))
</code></pre>
