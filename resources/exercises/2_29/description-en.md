<p>A binary mobile consists of two branches, a left branch and a right branch. Each branch is a rod of a certain length, from which hangs either a weight or another binary mobile. We can represent a binary mobile using compound data by constructing it from two branches (for example, using 
<code>list</code>
):
</p>
<pre><code>(define (make-mobile left right)
  (list left right))
</code></pre>
<p>A branch is constructed from a 
<code>length</code>
 (which must be a number) together with a 
<code>structure</code>
, which may be either a number (representing a simple weight) or another mobile:
</p>
<pre><code>(define (make-branch length structure)
  (list length structure))
</code></pre>
<p>a.  Write the corresponding selectors 
<code>left-branch</code>
 and 
<code>right-branch</code>
, which return the branches of a mobile, and 
<code>branch-length</code>
 and 
<code>branch-structure</code>
, which return the components of a branch.
</p>
<p>b.  Using your selectors, define a procedure 
<code>total-weight</code>
 that returns the total weight of a mobile.
</p>
<p>c.  A mobile is said to be balanced if the torque applied by its top-left branch is equal to that applied by its top-right branch (that is, if the length of the left rod multiplied by the weight hanging from that rod is equal to the corresponding product for the right side) and if each of the submobiles hanging off its branches is balanced. Design a predicate that tests whether a binary mobile is balanced.</p>
<p>d.  Suppose we change the representation of mobiles so that the constructors are</p>
<pre><code>(define (make-mobile left right)
  (cons left right))
(define (make-branch length structure)
  (cons length structure))
</code></pre>
<p>How much do you need to change your programs to convert to the new representation?</p>
