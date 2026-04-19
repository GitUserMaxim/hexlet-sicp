<p>Чтобы внимательнее изучить задержанные вычисления, мы воспользуемся следующей процедурой, которая печатает свой аргумент, а затем возвращает его:</p>
<pre><code>(define (show x)
  (display-line x)
  x)
</code></pre>
<p>Что печатает интерпретатор в ответ на каждое выражение из следующей последовательности?</p>
<pre><code>(define x (stream-map show (stream-enumerate-interval 0 10)))

(stream-ref x 5)

(stream-ref x 7)
</code></pre>
