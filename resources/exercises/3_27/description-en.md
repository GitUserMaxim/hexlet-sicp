<p>
    Memoization (also called tabulation) is a technique that enables a procedure to record, in a local table, values that have previously been computed. This technique can make a vast difference in the performance of a program. A memoized procedure maintains a table in which values of previous calls are stored using as keys the arguments that produced the values. When the memoized procedure is asked to compute a value, it first checks the table to see if the value is already there and, if so, just returns that value. Otherwise, it computes the new value in the ordinary way and stores this in the table. As an example of memoization, recall from section 
    <a href="{{ getChapterOriginLinkForNumber('1.2.2') }}">1.2.2</a>
    the exponential process for computing Fibonacci numbers:
</p>
<pre><code>(define (fib n)
  (cond ((= n 0) 0)
        ((= n 1) 1)
        (else (+ (fib (- n 1))
                 (fib (- n 2))))))
</code></pre>
<p>The memoized version of the same procedure is</p>
<pre><code>(define memo-fib
  (memoize (lambda (n)
             (cond ((= n 0) 0)
                   ((= n 1) 1)
                   (else (+ (memo-fib (- n 1))
                            (memo-fib (- n 2))))))))
</code></pre>
<p>
    where the 
    <code>memoize</code>
    is defined as

</p>
<pre><code>(define (memoize f)
  (let ((table (make-table)))
    (lambda (x)
      (let ((previously-computed-result (lookup x table)))
        (or previously-computed-result
            (let ((result (f x)))
              (insert! x result table)
              result))))))
</code></pre>
<p>
    Draw an environment diagram to analyze the computation of (
    <code>memo-fib 3</code>
    ). Explain why 
    <code>memo-fib</code>
    computes the 
    <code>n</code>-th Fibonacci number in a number of steps proportional to 
    <code>n</code>
    . Would the scheme still work if we had simply defined 
    <code>memo-fib</code>
    to be (
    <code>memoize fib</code>
    )?
</p>
