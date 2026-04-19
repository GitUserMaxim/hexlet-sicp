<p>Suppose we type in the following definitions to the lazy evaluator:</p>
<pre><code>(define count 0)
(define (id x)
  (set! count (+ count 1))
  x)</code></pre>
<p>Give the missing values in the following sequence of interactions, and explain your answers.</p>
<pre><code>(define w (id (id 10)))
;;; L-Eval input:
count
;;; L-Eval value:
&lt;response&gt;
;;; L-Eval input:
w
;;; L-Eval value:
&lt;response&gt;
;;; L-Eval input:
count
;;; L-Eval value:
&lt;response&gt;</code></pre>
