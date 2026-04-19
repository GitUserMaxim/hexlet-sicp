<p>Two lists are said to be 
<code>equal?</code>
 if they contain equal elements arranged in the same order. For example,
</p>
<pre><code>(equal? '(this is a list) '(this is a list))
</code></pre>
<p>is true, but</p>
<pre><code>(equal? '(this is a list) '(this (is a) list))
</code></pre>
<p>is false. To be more precise, we can define 
<code>equal?</code>
 recursively in terms of the basic 
<code>eq?</code>
 equality of symbols by saying that 
<code>a</code>
 and 
<code>b</code>
 are equal if they are both symbols and the symbols are 
<code>eq?</code>
, or if they are both lists such that 
<code>(car a)</code>
 is 
<code>equal? (car b)</code>
 and 
<code>(cdr a)</code>
 is 
<code>equal? (cdr b)</code>
. Using this idea, implement 
<code>equal?</code>
 as a procedure 
<code>equal-proc?</code>
.
</p>
