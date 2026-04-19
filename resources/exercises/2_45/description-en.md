<p>
<code>Right-split</code>
 and 
<code>up-split</code>
 can be expressed as instances of a general splitting operation. Define a procedure 
<code>split</code>
 with the property that evaluating
</p>
<pre><code>(define right-split (split beside below))

(define up-split (split below beside))
</code></pre>
<p>produces procedures 
<code>right-split</code>
 and 
<code>up-split</code>
 with the same behaviors as the ones already defined.</p>
