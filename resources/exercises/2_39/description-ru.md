<p>Закончите следующие определения 
<code>reverse</code>
 (упражнение 
<a href="{{ route('exercises.show', App\Models\Exercise::findByPath('2.18')) }}">2.18</a>
) в терминах процедур 
<code>fold-right</code>
 и 
<code>fold-left</code>
 из упражнения 
<a href="{{ route('exercises.show', App\Models\Exercise::findByPath('2.38')) }}">2.38</a>
:</p>
<pre><code>(define (reverse-right sequence)
  (fold-right (lambda (x y) &lt;??&gt;) nil sequence))

(define (reverse-left sequence)
  (fold-left (lambda (x y) &lt;??&gt;) nil sequence))
</code></pre>
