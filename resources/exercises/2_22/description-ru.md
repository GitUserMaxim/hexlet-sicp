<p>Хьюго Дум пытается переписать первую из процедур 
<code>square-list</code>
 из упражнения 
<a href="{{ route('exercises.show', App\Models\Exercise::findByPath('2.21')) }}">2.21</a>
 так, чтобы она работала как итеративный процесс: </p>
<pre><code>(define (square-list items)
  (define (iter things answer)
    (if (null? things)
        answer
        (iter (cdr things)
              (cons (square (car things))
                    answer))))
  (iter items nil))
</code></pre>
<p>К сожалению, такое определение 
<code>square-list</code>
 выдает список результатов в порядке, обратном желаемому. Почему?
</p>
<p>Затем Хьюго пытается исправить ошибку, обменяв аргументы 
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
<p>И так программа тоже не работает. Объясните это.</p>
