<p>Louis Reasoner asks why the 
<code>sqrt-stream</code>
 procedure was not written in the following more straightforward way, without the local variable 
<code>guesses</code>
:
</p>
<pre><code>(define (sqrt-stream x)
  (cons-stream 1.0
               (stream-map (lambda (guess)
                             (sqrt-improve guess x))
                           (sqrt-stream x))))
</code></pre>
<p>Alyssa P. Hacker replies that this version of the procedure is considerably less efficient because it performs redundant computation. Explain Alyssa's answer. Would the two versions still differ in efficiency if our implementation of 
<code>delay</code>
 used only 
<code>(lambda () &lt;exp&gt;)</code>
 without using the optimization provided by 
<code>memo-proc</code>
 (section 3.5.1)?
</p>
