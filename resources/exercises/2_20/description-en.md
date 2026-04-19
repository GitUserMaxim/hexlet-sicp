<p>The procedures 
<code>+</code>
, 
<code>*</code>
 and 
<code>list</code>
 take arbitrary numbers of arguments. One way to define such procedures is to use define with dotted-tail notation. In a procedure definition, a parameter list that has a dot before the last parameter name indicates that, when the procedure is called, the initial parameters (if any) will have as values the initial arguments, as usual, but the final parameter's value will be a list of any remaining arguments. For instance, given the definition
</p>
<pre><code>(define (f x y . z) &lt;??&gt;)
</code></pre>
<p>the procedure 
<code>f</code>
 can be called with two or more arguments. If we evaluate
</p>
<pre><code>(f 1 2 3 4 5 6)
</code></pre>
<p>then in the body of 
<code>f</code>
, 
<code>x</code>
 will be 
<code>1</code>
, 
<code>y</code>
 will be 
<code>2</code>
, and 
<code>z</code>
 will be the list 
<code>(3 4 5 6)</code>
. Given the definition
</p>
<pre><code>(define (g . w) &lt;??&gt;)
</code></pre>
<p>the procedure 
<code>g</code>
 can be called with zero or more arguments. If we evaluate
</p>
<pre><code>(g 1 2 3 4 5 6)
</code></pre>
<p>then in the body of 
<code>g</code>
, 
<code>w</code>
 will be the list 
<code>(1 2 3 4 5 6)</code>
.
</p>
<p>Use this notation to write a procedure 
<code>same-parity</code>
 that takes one or more integers and returns a list of all the arguments that have the same even-odd parity as the first argument. For example,
</p>
<pre><code>(same-parity 1 2 3 4 5 6 7)
<i>(1 3 5 7)</i>

(same-parity 2 3 4 5 6 7)
<i>(2 4 6)</i>
</code></pre>
