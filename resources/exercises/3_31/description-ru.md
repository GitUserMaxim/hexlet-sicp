<p>
    Внутренняя процедура
    <code>accept-action-procedure!</code>, определенная в
    <code>make-wire</code>, требует, чтобы в момент, когда процедура-действие добавляется к проводу, она немедленно исполнялась. Объясните, зачем требуется такая инициализация. В частности, проследите работу процедуры
    <code>half-adder</code>
    из этого текста и скажите, как отличалась бы реакция системы, если бы
    <code>accept-action-procedure!</code>
    была определена как
</p>
<pre><code>(define (accept-action-procedure! proc)
  (set! action-procedures (cons proc action-procedures)))
</code></pre>
