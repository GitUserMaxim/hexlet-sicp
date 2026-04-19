<p>Хьюго Дум считает, что построение потока пар из трех частей — процедура слишком сложная. Он предлагает вместо того, чтобы отделять пару 
<code>(S₀, T₀)</code>
, работать с первой строкой целиком:
</p>
<pre><code>(define (pairs s t)
  (interleave
   (stream-map (lambda (x) (list (stream-car s) x))
               t)
   (pairs (stream-cdr s) (stream-cdr t))))
</code></pre>
<p>Будет ли такой код работать? Посмотрите, что произойдет, если мы попытаемся вычислить 
<code>(pairs integers integers)</code>
, используя определение Хьюго.
</p>
