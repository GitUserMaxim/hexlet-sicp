<p>The accumulate procedure is also known as 
<code>fold-right</code>
, because it combines the first element of the sequence with the result of combining all the elements to the right. There is also a 
<code>fold-left</code>
, which is similar to 
<code>fold-right</code>
, except that it combines elements working in the opposite direction:
</p>
<pre><code>(define (fold-left op initial sequence)
  (define (iter result rest)
    (if (null? rest)
        result
        (iter (op result (car rest))
              (cdr rest))))
  (iter initial sequence))
</code></pre>
<p>What are the values of</p>
<pre><code>(fold-right / 1 (list 1 2 3))

(fold-left / 1 (list 1 2 3))

(fold-right list nil (list 1 2 3))

(fold-left list nil (list 1 2 3))
</code></pre>
<p>Give a property that 
<code>op</code>
 should satisfy to guarantee that 
<code>fold-right</code>
 and 
<code>fold-left</code>
 will produce the same values for any sequence.
</p>
