<p>Лиза П. Хакер предлагает использовать упрощенную версию 
<code>stream-flatmap</code>
 в 
<code>negate</code>
, 
<code>lisp-value</code>
 и 
<code>find-assertions</code>
. Она замечает, что в этих случаях процедура, которая отображает поток кадров, всегда порождает либо пустой поток, либо поток из одного элемента, и поэтому при слиянии этих потоков незачем использовать чередование.
</p>
<p>а. Заполните пропущенные выражения в программе Лизы.</p>
<pre><code>(define (simple-stream-flatmap proc s)
  (simple-flatten (stream-map proc s)))

(define (simple-flatten stream)
  (stream-map &lt;??&gt;
              (stream-filter &lt;??&gt; stream)))
</code></pre>
<p>б. Если мы изменяем систему таким образом, меняется ли ее поведение?</p>
