<p>Интерфейс 
<code>compile-and-go</code>
, реализованный в этом разделе, неудобен, поскольку компилятор можно вызвать только один раз (при запуске машины-вычислителя). Дополните интерфейс между компилятором и интерпретатором, введя примитив 
<code>compile-and-run</code>
, который можно будет вызывать из вычислителя с явным управлением так:
</p>
<pre><code>;;; EC-Eval input:
(compile-and-run
  '(define (factorial n)
    (if (= n 1)
        1
        (* (factorial (- n 1)) n))))

;;; EC-Eval value:
<i>ok</i>

;;; EC-Eval input:
(factorial 5)

;;; EC-Eval value:
<i>120</i>
</code></pre>
