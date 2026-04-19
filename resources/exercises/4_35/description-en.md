<p>Write a procedure 
<code>an-integer-between</code>
 that returns an integer between two given bounds. This can be used to implement a procedure that finds Pythagorean triples, i.e., triples of integers 
<code>(i, j, k)</code>
 between the given bounds such that 
<code>i ≤ j</code>
 and 
<code>i² + j² = k²</code>
, as follows:
</p>
<pre><code>(define (a-pythagorean-triple-between low high)
  (let ((i (an-integer-between low high)))
    (let ((j (an-integer-between i high)))
      (let ((k (an-integer-between j high)))
        (require (= (+ (* i i) (* j j)) (* k k)))
        (list i j k)))))</code></pre>
