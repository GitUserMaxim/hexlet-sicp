<p>Fill in the missing expressions to complete the following definitions of some basic list-manipulation operations as accumulations:</p>
<pre><code>(define (map p sequence)
  (accumulate (lambda (x y) &lt;??&gt;) nil sequence))

(define (append seq1 seq2)
  (accumulate cons &lt;??&gt; &lt;??&gt;))

(define (length sequence)
  (accumulate &lt;??&gt; 0 sequence))
</code></pre>
