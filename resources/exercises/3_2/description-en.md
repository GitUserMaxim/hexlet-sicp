<p>
    In software-testing applications, it is useful to be able to count the number of times a given procedure is called during the course of a computation. Write a procedure 
    <code>make-monitored</code>
     that takes as input a procedure, 
    <code>f</code>
    , that itself takes one input. The result returned by 
    <code>make-monitored</code>
     is a third procedure, say 
    <code>mf</code>
    , that keeps track of the number of times it has been called by maintaining an internal counter. If the input to 
    <code>mf</code>
     is the special symbol 
    <code>how-many-calls?</code>
    , then mf returns the value of the counter. If the input is the special symbol reset-count, then 
    <code>reset-count</code>, <code>mf</code>
     resets the counter to zero. For any other input, 
    <code>mf</code>
     returns the result of calling 
    <code>f</code>
     on that input and increments the counter. For instance, we could make a monitored version of the 
    <code>sqrt</code>
     procedure:
</p>
<pre><code>(define s (make-monitored sqrt))
(s 100)
<i>10</i>
(s 'how-many-calls?)
<i>1</i></code></pre>
