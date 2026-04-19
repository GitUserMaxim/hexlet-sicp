<p>
    The internal procedure
    <code>accept-action-procedure!</code> defined in
    <code>make-wire</code> specifies that when a new action procedure is added to a wire, the procedure is immediately run. Explain why this initialization is necessary. In particular, trace through the
    <code>half-adder</code>
    example in the paragraphs above and say how the system's response would differ if we had defined accept
    <code>accept-action-procedure!</code>
    as
</p>
<pre><code>(define (accept-action-procedure! proc)
  (set! action-procedures (cons proc action-procedures)))
</code></pre>
