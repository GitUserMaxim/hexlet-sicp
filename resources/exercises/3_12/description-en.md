<p>
    The following procedure for appending lists was introduced in section 
    <a href="{{ getChapterOriginLinkForNumber('2.2.1') }}">2.2.1</a>
    :
</p>
<pre><code>(define (append x y)
  (if (null? x)
      y
      (cons (car x) (append (cdr x) y))))</code></pre>
<p>
    <code>Append</code>
     forms a new list by successively consing the elements of 
    <code>x</code>
     onto 
    <code>y</code>
    . The procedure 
    <code>append!</code>
     is similar to 
    <code>append</code>
    , but it is a mutator rather than a constructor. It appends the lists by splicing them together, modifying the final pair of 
    <code>x</code>
     so that its 
    <code>cdr</code>
     is now 
    <code>y</code>
    . (It is an error to call 
    <code> append!</code>
     with an empty 
    <code>x</code>
    .)
</p>
<pre><code>(define (append! x y)
  (set-cdr! (last-pair x) y)
  x)</code></pre>
<p>
    Here 
    <code>last-pair</code>
     is a procedure that returns the last pair in its argument:
</p>
<pre><code>(define (last-pair x)
  (if (null? (cdr x))
      x
      (last-pair (cdr x))))</code></pre>
<p>
    Consider the interaction
</p>
<pre><code>(define x (list 'a 'b))
(define y (list 'c 'd))
(define z (append x y))
z
<i>(a b c d)</i>
(cdr x)
&lt;response&gt;
(define w (append! x y))
w
<i>(a b c d)</i>
(cdr x)
&lt;response&gt;</code></pre>
<p>
    What are the missing 
    <code>&lt;response&gt;</code>
    s? Draw box-and-pointer diagrams to explain your answer.
</p>
