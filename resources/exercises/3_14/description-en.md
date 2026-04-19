<p>
    The following procedure is quite useful, although obscure:
</p>
<pre><code>(define (mystery x)
  (define (loop x y)
    (if (null? x)
        y
        (let ((temp (cdr x)))
          (set-cdr! x y)
          (loop temp x))))
  (loop x '()))</code></pre>
<p>
    <code>Loop</code>
     uses the "temporary" variable 
    <code>temp</code>
     to hold the old value of the 
    <code>cdr</code>
     of 
    <code>x</code>
    , since the 
    <code>set-cdr!</code>
     on the next line destroys the 
    <code>cdr</code>
    . Explain what 
    <code>mystery</code>
     does in general. Suppose 
    <code>v</code>
     is defined by 
    <code>(define v (list 'a 'b 'c 'd))</code>
    . Draw the box-and-pointer diagram that represents the list to which 
    <code>v</code>
     is bound. Suppose that we now evaluate 
    <code>(define w (mystery v))</code>
    . Draw box-and-pointer diagrams that show the structures 
    <code>v</code>
     and 
    <code>w</code>
     after evaluating this expression. What would be printed as the values of 
    <code>v</code>
     and 
    <code>w</code>
    ?
</p>
