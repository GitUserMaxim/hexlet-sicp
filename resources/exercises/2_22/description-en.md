<p>Louis Reasoner tries to rewrite the first 
<code>square-list</code>
 procedure of exercise 
<a href="{{ route('exercises.show', App\Models\Exercise::findByPath('2.21')) }}">2.21</a>
 so that it evolves an iterative process: </p>
<pre><code>(define (square-list items)
  (define (iter things answer)
    (if (null? things)
        answer
        (iter (cdr things)
              (cons (square (car things))
                    answer))))
  (iter items nil))
</code></pre>
<p>Unfortunately, defining 
<code>square-list</code>
 this way produces the answer list in the reverse order of the one desired. Why?
</p>
<p>Louis then tries to fix his bug by interchanging the arguments to 
<code>cons</code>
:
</p>
<pre><code>(define (square-list items)
  (define (iter things answer)
    (if (null? things)
        answer
        (iter (cdr things)
              (cons answer
                    (square (car things))))))
  (iter items nil))
</code></pre>
<p>This doesn't work either. Explain.</p>
