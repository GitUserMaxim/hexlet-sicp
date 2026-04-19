<p>Опишите регистровые машины для реализации каждой из следующих процедур. Для каждой из этих машин напишите последовательность команд контроллера и нарисуйте диаграмму, показывающую пути данных.</p>
<p>а. Рекурсивное возведение в степень:</p>
<pre><code>(define (expt b n)
  (if (= n 0)
      1
      (* b (expt b (- n 1)))))</code></pre>
<p>б. Итеративное возведение в степень:</p>
<pre><code>(define (expt b n)
  (define (expt-iter counter product)
    (if (= counter 0)
        product
        (expt-iter (- counter 1) (* b product))))
  (expt-iter n 1))</code></pre>
