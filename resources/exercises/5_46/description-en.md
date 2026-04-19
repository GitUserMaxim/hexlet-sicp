<p>Carry out an analysis like the one in exercise <a href="{{ route('exercises.show', App\Models\Exercise::findByPath('5.45')) }}">5.45</a>
 to determine the effectiveness of compiling the tree-recursive Fibonacci procedure</p>
<pre><code>(define (fib n)
  (if (< n 2)
      n
      (+ (fib (- n 1)) (fib (- n 2)))))
</code></pre>
<p>compared to the effectiveness of using the special-purpose Fibonacci machine of figure 5.12. (For measurement of the interpreted performance, see exercise <a href="{{ route('exercises.show', App\Models\Exercise::findByPath('5.29')) }}">5.29</a>
.) For Fibonacci, the time resource used is not linear in 
<code>n</code>
; hence the ratios of stack operations will not approach a limiting value that is independent of 
<code>n</code>
.
</p>
<pre><code>(controller
   (assign continue (label fib-done))
 fib-loop
   (test (op <) (reg n) (const 2))
   (branch (label immediate-answer))
   ;; set up to compute Fib(n - 1)
   (save continue)
   (assign continue (label afterfib-n-1))
   (save n)                           ; save old value of n
   (assign n (op -) (reg n) (const 1)); clobber n to n - 1
   (goto (label fib-loop))            ; perform recursive call
 afterfib-n-1                         ; upon return, val contains Fib(n - 1)
   (restore n)
   (restore continue)
   ;; set up to compute Fib(n - 2)
   (assign n (op -) (reg n) (const 2))
   (save continue)
   (assign continue (label afterfib-n-2))
   (save val)                         ; save Fib(n - 1)
   (goto (label fib-loop))
 afterfib-n-2                         ; upon return, val contains Fib(n - 2)
   (assign n (reg val))               ; n now contains Fib(n - 2)
   (restore val)                      ; val now contains Fib(n - 1)
   (restore continue)
   (assign val                        ;  Fib(n - 1) +  Fib(n - 2)
           (op +) (reg val) (reg n))
   (goto (reg continue))              ; return to caller, answer is in val
 immediate-answer
   (assign val (reg n))               ; base case:  Fib(n) = n
   (goto (reg continue))
 fib-done)
</code></pre>
Figure 5.12:  Controller for a machine to compute Fibonacci numbers.</p>
