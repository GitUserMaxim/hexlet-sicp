<p>Suppose that we implement 
<code>test-and-set!</code>
 using an ordinary procedure as shown in the text, without attempting to make the operation atomic. Draw a timing diagram like the one in figure 3.29 to demonstrate how the mutex implementation can fail by allowing two processes to acquire the mutex at the same time.
</p>
<img class="img-fluid" src="{{ asset("images/exercises/3_46.gif") }}" alt="3.46">
<p>Figure 3.29:  Timing diagram showing how interleaving the order of events in two banking withdrawals can lead to an incorrect final balance.</p>
