<p>
    Рассмотрим следующую процедуру 
    <code>make-cycle</code>
    , которая пользуется 
    <code>last-pair</code>
     из упражнения 
    <a title="3.12" href="{{ route('exercises.show', App\Models\Exercise::findByPath('3.12')) }}">3.12</a>
    :
</p>
<pre><code>(define (make-cycle x)
  (set-cdr! (last-pair x) x)
  x)</code></pre>
<p>
    Нарисуйте стрелочную диаграмму, которая изображает структуру 
    <code>z</code>
    , созданную таким кодом:
</p>
<pre><code>(define z (make-cycle (list 'a 'b 'c)))</code></pre>
<p>
    Что случится, если мы попробуем вычислить 
    <code>(last-pair z)</code>
    ?
</p>
