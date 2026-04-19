<p>«Именованный let» — это вариант 
<code>let</code>
, который имеет вид
</p>
<pre><code>(let var bindings body)</code></pre>
<p>
<code>&lt;bindings&gt;</code>
 и 
<code>&lt;body&gt;</code>
 такие же, как и в обычном 
<code>let</code>
, но только 
<code>&lt;var&gt;</code>
 связана в 
<code>&lt;body&gt;</code>
 с процедурой, у которой тело 
<code>&lt;body&gt;</code>
, а имена параметров — переменные в 
<code>&lt;bindings&gt;</code>
. Таким образом, можно неоднократно выполнять 
<code>&lt;body&gt;</code>
, вызывая процедуру по имени 
<code>&lt;var&gt;</code>
. Например, итеративную процедуру для порождения чисел Фибоначчи (раздел 1.2.2) можно переписать при помощи именованного 
<code>let</code>
 как,
</p>
<pre><code>(define (fib n)
  (let fib-iter ((a 1)
                 (b 0)
                 (count n))
    (if (= count 0)
        b
        (fib-iter (+ a b) a (- count 1)))))</code></pre>
<p>Измените преобразование 
<code>let->combination</code>
 из упражнения 
<a href="{{ route('exercises.show', App\Models\Exercise::findByPath('4.6')) }}">4.6</a>
 так, чтобы оно поддерживало именованный 
<code>let</code>
.
</p>
