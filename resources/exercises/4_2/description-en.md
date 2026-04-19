<p>Louis Reasoner plans to reorder the 
<code>cond</code>
 clauses in eval so that the clause for procedure applications appears before the clause for assignments. He argues that this will make the interpreter more efficient: Since programs usually contain more applications than assignments, definitions, and so on, his modified eval will usually check fewer clauses than the original 
<code>eval</code>
 before identifying the type of an expression.
</p>
<p>a. What is wrong with Louis's plan? (Hint: What will Louis's evaluator do with the expression 
<code>(define x 3)</code>
?)
</p>
<p>b. Louis is upset that his plan didn't work. He is willing to go to any lengths to make his evaluator recognize procedure applications before it checks for most other kinds of expressions. Help him by changing the syntax of the evaluated language so that procedure applications start with 
<code>call</code>
. For example, instead of 
<code>(factorial 3)</code>
 we will now have to write 
<code>(call factorial 3)</code>
 and instead of 
<code>(+ 1 2)</code>
 we will have to write 
<code>(call + 1 2)</code>
.
</p>
