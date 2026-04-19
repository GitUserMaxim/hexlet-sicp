<p>Хьюго Дум спрашивает, почему нельзя было написать 
<code>sqrt-stream</code>
 более простым способом, без внутренней переменной 
<code>guesses</code>
:
</p>
<pre><code>(define (sqrt-stream x)
  (cons-stream 1.0
               (stream-map (lambda (guess)
                             (sqrt-improve guess x))
                           (sqrt-stream x))))
</code></pre>
<p>Лиза П. Хакер отвечает, что эта версия процедуры значительно менее эффективна, поскольку производит избыточные вычисления. Объясните Лизин ответ. Сохранилось бы отличие в эффективности, если бы реализация 
<code>delay</code>
 использовала только 
<code>(lambda () &lt;exp&gt;)</code>
, без оптимизации через 
<code>memo-proc</code>
 (см. раздел 3.5.1)?
</p>
