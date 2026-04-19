<p>Implement a new kind of assignment called 
<code>permanent-set!</code>
 that is not undone upon failure. For example, we can choose two distinct elements from a list and count the number of trials required to make a successful choice as follows:
</p>
<pre><code>(define count 0)
(let ((x (an-element-of '(a b c)))
      (y (an-element-of '(a b c))))
  (permanent-set! count (+ count 1))
  (require (not (eq? x y)))
  (list x y count))
;;; Starting a new problem
;;; Amb-Eval value:
<i>(a b 2)</i>
;;; Amb-Eval input:
try-again
;;; Amb-Eval value:
<i>(a c 3)</i>
</code></pre>
<p>What values would have been displayed if we had used 
<code>set!</code>
 here rather than 
<code>permanent-set!</code>
?
</p>
