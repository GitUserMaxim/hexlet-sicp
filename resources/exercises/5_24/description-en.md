<p>Implement 
<code>cond</code>
 as a new basic special form without reducing it to 
<code>if</code>
. You will have to construct a loop that tests the predicates of successive 
<code>cond</code>
 clauses until you find one that is true, and then use 
<code>ev-sequence</code>
 to evaluate the actions of the clause.
</p>
