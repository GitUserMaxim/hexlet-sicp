<p>Because internal definitions look sequential but are actually simultaneous, some people prefer to avoid them entirely, and use the special form 
<code>letrec</code>
 instead. 
<code>Letrec</code>
 looks like 
<code>let</code>
, so it is not surprising that the variables it binds are bound simultaneously and have the same scope as each other. The sample procedure 
<code>f</code>
 above can be written without internal definitions, but with exactly the same meaning, as
</p>
<pre><code>(define (f x)
  (letrec ((even?
            (lambda (n)
              (if (= n 0)
                  true
                  (odd? (- n 1)))))
           (odd?
            (lambda (n)
              (if (= n 0)
                  false
                  (even? (- n 1))))))
    &lt;rest of body of f&gt;))</code></pre>
<p>
<code>letrec</code>
 expressions, which have the form
</p>
<pre><code>(letrec ((&lt;var1&gt; &lt;exp1&gt;) ... (&lt;varn&gt; &lt;expn&gt;))
  body)</code></pre>
<p>are a variation on 
<code>let</code>
 in which the expressions 
<code>&lt;expk&gt;</code>
 that provide the initial values for the variables 
<code>&lt;vark&gt;</code>
 are evaluated in an environment that includes all the 
<code>letrec</code>
 bindings. This permits recursion in the bindings, such as the mutual recursion of 
<code>even?</code>
 and 
<code>odd?</code>
 in the example above, or the evaluation of 
<code>10</code>
 factorial with
</p>
<pre><code>(letrec ((fact
          (lambda (n)
            (if (= n 1)
                1
                (* n (fact (- n 1)))))))
  (fact 10))</code></pre>
<p>a. Implement 
<code>letrec</code>
 as a derived expression, by transforming a 
<code>letrec</code>
 expression into a 
<code>let</code>
 expression as shown in the text above or in exercise 
<a href="{{ route('exercises.show', App\Models\Exercise::findByPath('4.18')) }}">4.18</a>
. That is, the 
<code>letrec</code>
 variables should be created with a 
<code>let</code>
 and then be assigned their values with 
<code>set!</code>
.
</p>
<p>b. Louis Reasoner is confused by all this fuss about internal definitions. The way he sees it, if you don't like to use 
<code>define</code>
 inside a procedure, you can just use 
<code>let</code>
. Illustrate what is loose about his reasoning by drawing an environment diagram that shows the environment in which the 
<code>&lt;rest of body of f&gt;</code>
 is evaluated during evaluation of the expression 
<code>(f 5)</code>
, with 
<code>f</code>
 defined as in this exercise. Draw an environment diagram for the same evaluation, but with 
<code>let</code>
 in place of 
<code>letrec</code>
 in the definition of 
<code>f</code>
.
</p>
