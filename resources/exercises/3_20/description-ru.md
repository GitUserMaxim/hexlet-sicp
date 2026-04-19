<p>
    Нарисуйте диаграммы окружений, изображающие выполнение последовательности выражений
</p>
<pre><code>(define x (cons 1 2))
(define z (cons x x))
(set-car! (cdr z) 17)
(car x)
<i>17</i></code></pre>
<p>
     с помощью вышеприведенной процедурной реализации пар. (Сравните с упражнением 
    <a title="3.11" href="{{ route('exercises.show', App\Models\Exercise::findByPath('3.11')) }}">3.11</a>.)
</p>
