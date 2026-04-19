<p>
    It is useful to be able to reset a random-number generator to produce a sequence starting from a given value. Design a new 
    <code>rand</code>
     procedure that is called with an argument that is either the symbol 
    <code>generate</code>
     or the symbol 
    <code>reset</code>
     and behaves as follows: 
    <code>(rand 'generate)</code>
     produces a new random number; 
    <code>((rand 'reset) &lt;new-value&gt;)</code>
     resets the internal state variable to the designated 
    <code>&lt;new-value&gt;</code>
    . Thus, by resetting the state, one can generate repeatable sequences. These are very handy to have when testing and debugging programs that use random numbers.
</p>
