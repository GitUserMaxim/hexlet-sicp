<p>
<code>Right-split</code>
 и 
<code>up-split</code>
 можно выразить как разновидности общей операции разделения. Определите процедуру 
<code>split</code>
 с таким свойством, что вычисление
</p>
<pre><code>(define right-split (split beside below))

(define up-split (split below beside))
</code></pre>
<p>порождает процедуры 
<code>right-split</code>
 и 
<code>up-split</code>
 с таким же поведением, как и определенные ранее.</p>
