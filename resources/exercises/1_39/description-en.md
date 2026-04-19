<p>A continued fraction representation of the tangent function was published in 1770 by the German mathematician J.H. Lambert: </p>
<pre><code>tan x  =        x
         ---------------
         1 -     x²
             -----------
             3 -   x²
                 -------
                 5 - ...
</code></pre>
<p>where 
<code>x</code>
 is in radians. Define a procedure 
<code>(tan-cf x k)</code>
 that computes an approximation to the tangent function based on Lambert's formula. 
<code>K</code>
 specifies the number of terms to compute, as in exercise 
<a href="{{ route('exercises.show', App\Models\Exercise::findByPath('1.37')) }}">1.37</a>
.</p>
