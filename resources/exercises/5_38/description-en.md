<p>Our compiler is clever about avoiding unnecessary stack operations, but it is not clever at all when it comes to compiling calls to the primitive procedures of the language in terms of the primitive operations supplied by the machine. For example, consider how much code is compiled to compute 
<code>(+ a 1)</code>
: The code sets up an argument list in 
<code>argl</code>
, puts the primitive addition procedure (which it finds by looking up the symbol 
<code>+</code>
 in the environment) into 
<code>proc</code>
, and tests whether the procedure is primitive or compound. The compiler always generates code to perform the test, as well as code for primitive and compound branches (only one of which will be executed). We have not shown the part of the controller that implements primitives, but we presume that these instructions make use of primitive arithmetic operations in the machine's data paths. Consider how much less code would be generated if the compiler could open-code primitives -- that is, if it could generate code to directly use these primitive machine operations. The expression 
<code>(+ a 1)</code>
 might be compiled into something as simple as
</p>
<pre><code>(assign val (op lookup-variable-value) (const a) (reg env))
(assign val (op +) (reg val) (const 1))
</code></pre>
<p>In this exercise we will extend our compiler to support open coding of selected primitives. Special-purpose code will be generated for calls to these primitive procedures instead of the general procedure-application code. In order to support this, we will augment our machine with special argument registers 
<code>arg1</code>
 and 
<code>arg2</code>
. The primitive arithmetic operations of the machine will take their inputs from 
<code>arg1</code>
 and 
<code>arg2</code>
. The results may be put into 
<code>val</code>
, 
<code>arg1</code>
, or 
<code>arg2</code>
.
</p>
<p>The compiler must be able to recognize the application of an open-coded primitive in the source program. We will augment the dispatch in the 
<code>compile</code>
 procedure to recognize the names of these primitives in addition to the reserved words (the special forms) it currently recognizes. For each special form our compiler has a code generator. In this exercise we will construct a family of code generators for the open-coded primitives.
</p>
<p>a.  The open-coded primitives, unlike the special forms, all need their operands evaluated. Write a code generator 
<code>spread-arguments</code>
 for use by all the open-coding code generators. 
<code>Spread-arguments</code>
 should take an operand list and compile the given operands targeted to successive argument registers. Note that an operand may contain a call to an open-coded primitive, so argument registers will have to be preserved during operand evaluation.
</p>
<p>b.  For each of the primitive procedures 
<code>=</code>
, 
<code>*</code>
, 
<code>-</code>
, and 
<code>+</code>
, write a code generator that takes a combination with that operator, together with a target and a linkage descriptor, and produces code to spread the arguments into the registers and then perform the operation targeted to the given target with the given linkage. You need only handle expressions with two operands. Make 
<code>compile</code>
 dispatch to these code generators.
</p>
<p>c.  Try your new compiler on the 
<code>factorial</code>
 example. Compare the resulting code with the result produced without open coding.
</p>
<p>d.  Extend your code generators for 
<code>+</code>
 and 
<code>*</code>
 so that they can handle expressions with arbitrary numbers of operands. An expression with more than two operands will have to be compiled into a sequence of operations, each with only two inputs.
</p>
