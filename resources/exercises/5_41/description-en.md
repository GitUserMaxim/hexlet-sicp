<p>Write a procedure 
<code>find-variable</code>
 that takes as arguments a variable and a compile-time environment and returns the lexical address of the variable with respect to that environment. For example, in the program fragment that is shown above, the compile-time environment during the compilation of expression 
<code>&lt;e1&gt;</code>
 is 
<code>((y z) (a b c d e) (x y))</code>
. 
<code>Find-variable</code>
 should produce
</p>
<pre><code>(find-variable 'c '((y z) (a b c d e) (x y)))
<i>(1 2)</i>

(find-variable 'x '((y z) (a b c d e) (x y)))
<i>(2 0)</i>

(find-variable 'w '((y z) (a b c d e) (x y)))
<i>not-found</i>
</code></pre>
