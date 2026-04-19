<p>In this exercise we implement the method just described for interpreting internal definitions. We assume that the evaluator supports 
<code>let</code>
 (see exercise 
<a href="{{ route('exercises.show', App\Models\Exercise::findByPath('4.6')) }}">4.6</a>
).</p>
<p>a. Change 
<code>lookup-variable-value</code>
 (section 4.1.3) to signal an error if the value it finds is the symbol 
<code>*unassigned*</code>
.
</p>
<p>b. Write a procedure 
<code>scan-out-defines</code>
 that takes a procedure body and returns an equivalent one that has no internal definitions, by making the transformation described above.
</p>
<p>c. Install 
<code>scan-out-defines</code>
 in the interpreter, either in 
<code>make-procedure</code>
 or in 
<code>procedure-body</code>
 (see section 4.1.3). Which place is better? Why?
</p>
