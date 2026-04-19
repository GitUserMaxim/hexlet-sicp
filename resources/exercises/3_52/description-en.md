<p>Consider the sequence of expressions</p>
<pre><code>(define sum 0)

(define (accum x)
  (set! sum (+ x sum))
  sum)

(define seq (stream-map accum (stream-enumerate-interval 1 20)))

(define y (stream-filter even? seq))

(define z (stream-filter (lambda (x) (= (remainder x 5) 0))
                         seq))
(stream-ref y 7)

(display-stream z)
</code></pre>
<p>What is the value of 
<code>sum</code>
 after each of the above expressions is evaluated? What is the printed response to evaluating the 
<code>stream-ref</code>
 and 
<code>display-stream</code>
 expressions? Would these responses differ if we had implemented 
<code>(delay &lt;exp&gt;)</code>
 simply as 
<code>(lambda () &lt;exp&gt;)</code>
 without using the optimization provided by 
<code>memo-proc</code>
 ? Explain.
</p>
