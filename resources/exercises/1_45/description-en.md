<p>We saw in section 1.3.3 that attempting to compute square roots by naively finding a fixed point of 
<code>y → x/y</code>
 does not converge, and that this can be fixed by average damping. The same method works for finding cube roots as fixed points of the average-damped 
<code>y → x/y²</code>
. Unfortunately, the process does not work for fourth roots -- a single average damp is not enough to make a fixed-point search for 
<code>y → x/y³</code>
 converge. On the other hand, if we average damp twice (i.e., use the average damp of the average damp of 
<code>y → x/y³</code>
) the fixed-point search does converge. Do some experiments to determine how many average damps are required to compute 
<code>n</code>
th roots as a fixed-point search based upon repeated average damping of 
<code>y → x/yⁿ⁻¹</code>
. Use this to implement a simple procedure for computing 
<code>n</code>
th roots using 
<code>fixed-point</code>
, 
<code>average-damp</code>
, and the 
<code>repeated</code>
 procedure of exercise 
<a href="{{ route('exercises.show', App\Models\Exercise::findByPath('1.43')) }}">1.43</a>
. Assume that any arithmetic operations you need are available as primitives.</p>
