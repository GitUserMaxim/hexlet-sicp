<p>Suppose that Peter, Paul, and Mary share a joint bank account that initially contains $100. Concurrently, Peter deposits $10, Paul withdraws $20, and Mary withdraws half the money in the account, by executing the following commands:</p>
<pre><code>Peter:	(set! balance (+ balance 10))
Paul:	(set! balance (- balance 20))
Mary:	(set! balance (- balance (/ balance 2)))
</code></pre>
<p>a. List all the different possible values for 
<code>balance</code>
 after these three transactions have been completed, assuming that the banking system forces the three processes to run sequentially in some order.
</p>
<p>b. What are some other values that could be produced if the system allows the processes to be interleaved? Draw timing diagrams like the one in figure 3.29 to explain how these values can occur.</p>
<img class="img-fluid" src="{{ asset("images/exercises/3_38.gif") }}" alt="3.38">
<p>Figure 3.29:  Timing diagram showing how interleaving the order of events in two banking withdrawals can lead to an incorrect final balance.</p>
