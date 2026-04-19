<p>Let 
<code>f</code>
 and 
<code>g</code>
 be two one-argument functions. The composition 
<code>f</code>
 after 
<code>g</code>
 is defined to be the function 
<code>x → f(g(x))</code>
. Define a procedure 
<code>compose</code>
 that implements composition. For example, if 
<code>inc</code>
 is a procedure that adds 
<code>1</code>
 to its argument.
</p>
<pre><code>((compose square inc) 6)
<i>49</i>
</code></pre>
