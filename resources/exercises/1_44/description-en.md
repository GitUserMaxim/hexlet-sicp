<p>The idea of smoothing a function is an important concept in signal processing. If 
<code>f</code>
 is a function and 
<code>dx</code>
 is some small number, then the smoothed version of 
<code>f</code>
 is the function whose value at a point 
<code>x</code>
 is the average of 
<code>f(x − dx)</code>
, 
<code>f(x)</code>
, and 
<code>f(x + dx)</code>
. Write a procedure 
<code>smooth</code>
 that takes as input a procedure that computes 
<code>f</code>
 and returns a procedure that computes the smoothed 
<code>f</code>
. It is sometimes valuable to repeatedly smooth a function (that is, smooth the smoothed function, and so on) to obtained the 
<code>n</code>
-fold smoothed function. Show how to generate the 
<code>n</code>
-fold smoothed function of any given function using 
<code>smooth</code>
 and 
<code>repeated</code>
 from exercise 
<a href="{{ route('exercises.show', App\Models\Exercise::findByPath('1.43')) }}">1.43</a>
.</p>
