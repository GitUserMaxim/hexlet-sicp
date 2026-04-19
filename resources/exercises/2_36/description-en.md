<p>The procedure 
<code>accumulate-n</code>
 is similar to 
<code>accumulate</code>
 except that it takes as its third argument a sequence of sequences, which are all assumed to have the same number of elements. It applies the designated accumulation procedure to combine all the first elements of the sequences, all the second elements of the sequences, and so on, and returns a sequence of the results. For instance, if 
<code>s</code>
 is a sequence containing four sequences, 
<code>((1 2 3) (4 5 6) (7 8 9) (10 11 12))</code>
, then the value of 
<code>(accumulate-n + 0 s)</code>
 should be the sequence 
<code>(22 26 30)</code>
. Fill in the missing expressions in the following definition of 
<code>accumulate-n</code>
:
</p>
<pre><code>(define (accumulate-n op init seqs)
  (if (null? (car seqs))
      nil
      (cons (accumulate op init &lt;??&gt;)
            (accumulate-n op init &lt;??&gt;))))
</code></pre>
