<p>
    Ben Bitdiddle tells Louis that one way to avoid the trouble in exercise
    <a title="3.34" href="{{ route('exercises.show', App\Models\Exercise::findByPath('3.34')) }}">3.34</a>
    is to define a squarer as a new primitive constraint. Fill in the missing portions in Ben's outline for a procedure to implement such a constraint:
</p>
<pre><code>(define (squarer a b)
  (define (process-new-value)
    (if (has-value? b)
        (if (< (get-value b) 0)
            (error "square less than 0 -- SQUARER" (get-value b))
            &lt;alternative1&gt;)
        &lt;alternative2&gt;))
  (define (process-forget-value) &lt;body1&gt;)
  (define (me request) &lt;body2&gt;)
  &lt;rest of definition&gt;
  me)
</code></pre>
