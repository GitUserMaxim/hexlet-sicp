<p>Предположим, что мы (в обычной Scheme с аппликативным порядком вычислений) определяем 
<code>unless</code>
 как показано выше, а затем определяем 
<code>factorial</code>
 через 
<code>unless</code>
:
</p>
<pre><code>(define (factorial n)
  (unless (= n 1)
          (* n (factorial (- n 1)))
          1))</code></pre>
<p>Что произойдет, если мы попытаемся вычислить 
<code>(factorial 5)</code>
? Будут ли наши определения работать в языке с нормальным порядком вычислений?
</p>
