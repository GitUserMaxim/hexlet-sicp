<p>
<code>let*</code>
 is similar to 
<code>let</code>
, except that the bindings of the 
<code>let*</code>
 variables are performed sequentially from left to right, and each binding is made in an environment in which all of the preceding bindings are visible. For example
</p>
<pre><code>(let* ((x 3)
      (y (+ x 2))
      (z (+ x y 5)))
  (* x z))</code></pre>
<p>returns 
<code>39</code>
. Explain how a 
<code>let*</code>
 expression can be rewritten as a set of nested 
<code>let</code>
 expressions, and write a procedure 
<code>let*->nested-lets</code>
 that performs this transformation. If we have already implemented 
<code>let</code>
 (exercise 
<a href="{{ route('exercises.show', App\Models\Exercise::findByPath('4.6')) }}">4.6</a>
) and we want to extend the evaluator to handle 
<code>let*</code>
, is it sufficient to add a clause to 
<code>eval</code>
 whose action is
</p>
<pre><code>(eval (let*->nested-lets exp) env)</code></pre>
<p>or must we explicitly expand 
<code>let*</code>
 in terms of non-derived expressions?
</p>
