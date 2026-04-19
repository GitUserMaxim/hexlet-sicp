<p>Спроектируйте регистровую машину для вычисления факториалов с помощью итеративного алгоритма, задаваемого следующей процедурой. Нарисуйте для этой машины диаграммы путей данных
и контроллера.</p>
<pre><code>(define (factorial n)
  (define (iter product counter)
    (if (> counter n)
          product
          (iter (* counter product)
                (+ counter 1))))
  (iter 1 1))</code></pre>
