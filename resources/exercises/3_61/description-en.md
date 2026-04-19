<p>Let 
<code>S</code>
 be a power series (exercise 
<a href="{{ route('exercises.show', App\Models\Exercise::findByPath('3.59')) }}">3.59</a>
) whose constant term is 
<code>1</code>
. Suppose we want to find the power series 
<code>1/S</code>
, that is, the series 
<code>X</code>
 such that 
<code>S · X = 1</code>
. Write 
<code>S = 1 + SR</code>
 where 
<code>SR</code>
 is the part of 
<code>S</code>
 after the constant term. Then we can solve for 
<code>X</code>
 as follows:
</p>
<img class="img-fluid" src="{{ asset("images/exercises/3_61.gif") }}" alt="3.61">
<p>In other words, 
<code>X</code>
 is the power series whose constant term is 
<code>1</code>
 and whose higher-order terms are given by the negative of 
<code>SR</code>
 times 
<code>X</code>
. Use this idea to write a procedure 
<code>invert-unit-series</code>
 that computes 
<code>1/S</code>
 for a power series 
<code>S</code>
 with constant term 
<code>1</code>
. You will need to use 
<code>mul-series</code>
 from exercise 
<a href="{{ route('exercises.show', App\Models\Exercise::findByPath('3.60')) }}">3.60</a></p>
