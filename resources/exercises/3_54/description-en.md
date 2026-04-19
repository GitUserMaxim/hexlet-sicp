<p>Define a procedure 
<code>mul-streams</code>
, analogous to 
<code>add-streams</code>
, that produces the elementwise product of its two input streams. Use this together with the stream of 
<code>integers</code>
 to complete the following definition of the stream whose 
<code>n</code>
th element (counting from 
<code>0</code>
) is 
<code>n + 1</code>
 factorial:
</p>
<pre><code>(define factorials (cons-stream 1 (mul-streams &lt;??&gt; &lt;??&gt;)))
</code></pre>
