<p>The procedure 
<code>for-each</code>
 is similar to 
<code>map</code>
. It takes as arguments a procedure and a list of elements. However, rather than forming a list of the results, 
<code>for-each</code>
 just applies the procedure to each of the elements in turn, from left to right. The values returned by applying the procedure to the elements are not used at all -- 
<code>for-each</code>
 is used with procedures that perform an action, such as printing. For example,
</p>
<pre><code>(for-each (lambda (x) (newline) (display x))
          (list 57 321 88))
<i>57</i>
<i>321</i>
<i>88</i>
</code></pre>
<p>The value returned by the call to 
<code>for-each</code>
 (not illustrated above) can be something arbitrary, such as true. Give an implementation of 
<code>my-for-each</code>
.
</p>
