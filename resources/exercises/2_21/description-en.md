<p>The procedure 
<code>square-list</code>
 takes a list of numbers as argument and returns a list of the squares of those numbers.
</p>
<pre><code>(square-list (list 1 2 3 4))
<i>(1 4 9 16)</i>
</code></pre>
<p>Here are two different definitions of 
<code>square-list</code>
. Complete both of them by filling in the missing expressions:
</p>
<pre><code>(define (square-list items)
  (if (null? items)
      nil
      (cons &lt;??&gt; &lt;??&gt;)))

(define (square-list2 items)
  (map &lt;??&gt; &lt;??&gt;))
</code></pre>
