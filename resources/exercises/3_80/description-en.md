<p>A series 
<code>RLC</code>
 circuit consists of a resistor, a capacitor, and an inductor connected in series, as shown in figure 3.36. If 
<code>R</code>
, 
<code>L</code>
, and 
<code>C</code>
 are the resistance, inductance, and capacitance, then the relations between voltage (
<code>v</code>
) and current (
<code>i</code>
) for the three components are described by the equations
</p>
<img class="img-fluid" src="{{ asset("images/exercises/3_80_1.gif") }}" alt="3.80_1">
<p>and the circuit connections dictate the relations</p>
<img class="img-fluid" src="{{ asset("images/exercises/3_80_2.gif") }}" alt="3.80_2">
<p>Combining these equations shows that the state of the circuit (summarized by 
<code>vC</code>
, the voltage across the capacitor, and 
<code>iL</code>
, the current in the inductor) is described by the pair of differential equations
</p>
<img class="img-fluid" src="{{ asset("images/exercises/3_80_3.gif") }}" alt="3.80_3">
<p>The signal-flow diagram representing this system of differential equations is shown in figure 3.37.</p>
<img class="img-fluid" src="{{ asset("images/exercises/3_80_4.gif") }}" alt="3.80_4">
<p>Figure 3.36:  A series RLC circuit.</p>
<img class="img-fluid" src="{{ asset("images/exercises/3_80_5.gif") }}}" alt="3.80_5">
<p>Figure 3.37:  A signal-flow diagram for the solution to a series RLC circuit.</p>
<p>Write a procedure 
<code>RLC</code>
 that takes as arguments the parameters 
<code>R</code>
, 
<code>L</code>
, and 
<code>C</code>
 of the circuit and the time increment 
<code>dt</code>
. In a manner similar to that of the 
<code>RC</code>
 procedure of exercise 
<a href="{{ route('exercises.show', App\Models\Exercise::findByPath('3.73')) }}">3.73</a>
, 
<code>RLC</code>
 should produce a procedure that takes the initial values of the state variables, 
<code>vC₀</code>
 and 
<code>iL₀</code>
, and produces a pair (using 
<code>cons</code>
) of the streams of states 
<code>vC</code>
 and 
<code>iL</code>
. Using 
<code>RLC</code>
, generate the pair of streams that models the behavior of a series 
<code>RLC</code>
 circuit with 
<code>K = 1</code>
 ohm, 
<code>C = 0.2</code>
 farad, 
<code>L = 1</code>
 henry, 
<code>dt = 0.1</code>
 second, and initial values 
<code>iL₀ = 0</code>
 amps and 
<code>vC₀ = 10</code>
 volts.
</p>
