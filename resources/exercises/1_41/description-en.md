<p>Define a procedure 
<code>double</code>
 that takes a procedure of one argument as argument and returns a procedure that applies the original procedure twice. For example, if 
<code>inc</code>
 is a procedure that adds 
<code>1</code>
 to its argument, then 
<code>(double inc)</code>
 should be a procedure that adds 
<code>2</code>
. What value is returned by
</p>
<pre><code>(((double (double double)) inc) 5)
</code></pre>
