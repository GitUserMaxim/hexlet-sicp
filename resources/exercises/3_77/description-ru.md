<p>Вышеприведенная процедура 
<code>integral</code>
 была аналогична «непрямому» определению бесконечного потока натуральных чисел из раздела 3.5.2. В виде альтернативы можно дать определение 
<code>integral</code>
, более похожее на 
<code>integers-starting-from</code>
 (также в разделе 3.5.2):
</p>
<pre><code>(define (integral integrand initial-value dt)
  (cons-stream initial-value
               (if (stream-null? integrand)
                   the-empty-stream
                   (integral (stream-cdr integrand)
                             (+ (* dt (stream-car integrand))
                                initial-value)
                             dt))))
</code></pre>
<p>В системах с циклами эта реализациея порождает такие же проблемы, как и наша исходная версия 
<code>integral</code>
. Модифицируйте процедуру так, чтобы она ожидала 
<code>integrand</code>
 как задержанный аргумент, а следовательно, могла быть использована в процедуре 
<code>solve</code>
.
</p>
