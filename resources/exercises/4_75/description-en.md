<p>Implement for the query language a new special form called 
<code>unique</code>
. 
<code>unique</code>
 should succeed if there is precisely one item in the data base satisfying a specified query. For example,
</p>
<pre><code>(unique (job ?x (computer wizard)))
</code></pre>
<p>should print the one-item stream</p>
<pre><code>(unique (job (Bitdiddle Ben) (computer wizard)))
</code></pre>
<p>since Ben is the only computer wizard, and</p>
<pre><code>(unique (job ?x (computer programmer)))
</code></pre>
<p>should print the empty stream, since there is more than one computer programmer. Moreover,</p>
<pre><code>(and (job ?x ?j) (unique (job ?anyone ?j)))
</code></pre>
<p>should list all the jobs that are filled by only one person, and the people who fill them.</p>
<p>There are two parts to implementing 
<code>unique</code>
. The first is to write a procedure that handles this special form, and the second is to make 
<code>qeval</code>
 dispatch to that procedure. The second part is trivial, since 
<code>qeval</code>
 does its dispatching in a data-directed way. If your procedure is called 
<code>uniquely-asserted</code>
, all you need to do is
</p>
<pre><code>(put 'unique 'qeval uniquely-asserted)
</code></pre>
<p>and 
<code>qeval</code>
 will dispatch to this procedure for every query whose 
<code>type (car)</code>
 is the symbol 
<code>unique</code>
.
</p>
<p>The real problem is to write the procedure 
<code>uniquely-asserted</code>
. This should take as input the 
<code>contents (cdr)</code>
 of the 
<code>unique</code>
 query, together with a stream of frames. For each frame in the stream, it should use 
<code>qeval</code>
 to find the stream of all extensions to the frame that satisfy the given query. Any stream that does not have exactly one item in it should be eliminated. The remaining streams should be passed back to be accumulated into one big stream that is the result of the 
<code>unique</code>
 query. This is similar to the implementation of the 
<code>not</code>
 special form.
</p>
<p>Test your implementation by forming a query that lists all people who supervise precisely one person.</p>
