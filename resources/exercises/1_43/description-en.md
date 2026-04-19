<p>If 
<code>f</code>
 is a numerical function and 
<code>n</code>
 is a positive integer, then we can form the 
<code>n</code>
th repeated application of 
<code>f</code>
, which is defined to be the function whose value at 
<code>x</code>
 is 
<code>f(f(...(f(x))...))</code>
. For example, if 
<code>f</code>
 is the function 
<code>x → x + 1</code>
, then the 
<code>n</code>
th repeated application of 
<code>f</code>
 is the function 
<code>x → x + n</code>
. If 
<code>f</code>
 is the operation of squaring a number, then the 
<code>n</code>
th repeated application of 
<code>f</code>
 is the function that raises its argument to the 
<code>2ⁿ</code>
th power. Write a procedure that takes as inputs a procedure that computes 
<code>f</code>
 and a positive integer 
<code>n</code>
 and returns the procedure that computes the 
<code>n</code>
th repeated application of 
<code>f</code>
. Your procedure should be able to be used as follows:
</p>
<pre><code>((repeated square 2) 5)
<i>625</i>
</code></pre>
<p>Hint: You may find it convenient to use 
<code>compose</code>
 from exercise 
<a href="{{ route('exercises.show', App\Models\Exercise::findByPath('1.42')) }}">1.42</a>
.</p>
