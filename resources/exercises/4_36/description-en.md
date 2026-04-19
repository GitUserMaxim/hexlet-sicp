<p>Exercise <a href="{{ route('exercises.show', App\Models\Exercise::findByPath('3.69')) }}">3.69</a>
 discussed how to generate the stream of all Pythagorean triples, with no upper bound on the size of the integers to be searched. Explain why simply replacing 
<code>an-integer-between</code>
 by 
<code>an-integer-starting-from</code>
 in the procedure in exercise 
<a href="{{ route('exercises.show', App\Models\Exercise::findByPath('4.35')) }}">4.35</a>
 is not an adequate way to generate arbitrary Pythagorean triples. Write a procedure that actually will accomplish this. (That is, write a procedure for which repeatedly typing 
<code>try-again</code>
 would in principle eventually generate all Pythagorean triples.)
</p>
