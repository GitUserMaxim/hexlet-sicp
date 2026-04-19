<p>Рассмотрим последовательность выражений</p>
<pre><code>(define sum 0)

(define (accum x)
  (set! sum (+ x sum))
  sum)

(define seq (stream-map accum (stream-enumerate-interval 1 20)))

(define y (stream-filter even? seq))

(define z (stream-filter (lambda (x) (= (remainder x 5) 0))
                         seq))
(stream-ref y 7)

(display-stream z)
</code></pre>
<p>Каково значение 
<code>sum</code>
 после вычисления каждого из этих выражений? Что печатается при вычислении выражений 
<code>stream-ref</code>
 и 
<code>display-stream</code>
? Изменился бы этот результат, если бы мы реализовали 
<code>(delay &lt;exp&gt;)</code>
 просто как 
<code>(lambda () &lt;exp&gt;)</code>
, не применяя оптимизацию через 
<code>memo-proc</code>
? Объясните свой ответ.
</p>
