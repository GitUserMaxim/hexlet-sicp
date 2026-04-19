<p>Consider the change-counting program of section 1.2.2. It would be nice to be able to easily change the currency used by the program, so that we could compute the number of ways to change a British pound, for example. As the program is written, the knowledge of the currency is distributed partly into the procedure 
<code>first-denomination</code>
 and partly into the procedure 
<code>count-change</code>
 (which knows that there are five kinds of U.S. coins). It would be nicer to be able to supply a list of coins to be used for making change.
</p>
<p>We want to rewrite the procedure 
<code>cc</code>
 so that its second argument is a list of the values of the coins to use rather than an integer specifying which coins to use. We could then have lists that defined each kind of currency:
</p>
<pre><code>(define us-coins (list 50 25 10 5 1))

(define uk-coins (list 100 50 20 10 5 2 1 0.5))
</code></pre>
<p>We could then call 
<code>cc</code>
 as follows:
</p>
<pre><code>(cc 100 us-coins)
<i>292</i>
</code></pre>
<p>To do this will require changing the program 
<code>cc</code>
 somewhat. It will still have the same form, but it will access its second argument differently, as follows:
</p>
<pre><code>(define (cc amount coin-values)
  (cond ((= amount 0) 1)
        ((or (< amount 0) (no-more? coin-values)) 0)
        (else
         (+ (cc amount
                (except-first-denomination coin-values))
            (cc (- amount
                   (first-denomination coin-values))
                coin-values)))))
</code></pre>
<p>Define the procedures 
<code>first-denomination</code>
, 
<code>except-first-denomination</code>
, and 
<code>no-more?</code>
 in terms of primitive operations on list structures. Does the order of the list 
<code>coin-values</code>
 affect the answer produced by 
<code>cc</code>
? Why or why not?
</p>
