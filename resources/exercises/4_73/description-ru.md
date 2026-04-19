<p>Почему 
<code>flatten-stream</code>
 использует 
<code>delay</code>
 явно? Что было бы неправильно в таком определении:
</p>
<pre><code>(define (flatten-stream stream)
  (if (stream-null? stream)
      the-empty-stream
      (interleave
       (stream-car stream)
       (flatten-stream (stream-cdr stream)))))
</code></pre>
