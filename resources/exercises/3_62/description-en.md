<p>Use the results of exercises <a href="{{ route('exercises.show', App\Models\Exercise::findByPath('3.60')) }}">3.60</a>
 and <a href="{{ route('exercises.show', App\Models\Exercise::findByPath('3.61')) }}">3.61</a>
 to define a procedure 
<code>div-series</code>
 that divides two power series. 
<code>Div-series</code>
 should work for any two series, provided that the denominator series begins with a nonzero constant term. (If the denominator has a zero constant term, then 
<code>div-series</code>
 should signal an error.) Show how to use 
<code>div-series</code>
 together with the result of exercise 
<a href="{{ route('exercises.show', App\Models\Exercise::findByPath('3.59')) }}">3.59</a>
 to generate the power series for tangent.</p>
