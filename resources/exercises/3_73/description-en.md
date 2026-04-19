<img class="img-fluid" src="{{ asset("images/exercises/3_73_1.gif") }}" alt="3.73_1">
<img class="img-fluid" src="{{ asset("images/exercises/3_73_2.gif") }}" alt="3.73_2">
<p>Figure 3.33:  An RC circuit and the associated signal-flow diagram.</p>
<p>We can model electrical circuits using streams to represent the values of currents or voltages at a sequence of times. For instance, suppose we have an 
<code>RC</code>
 circuit consisting of a resistor of resistance 
<code>R</code>
 and a capacitor of capacitance 
<code>C</code>
 in series. The voltage response 
<code>v</code>
 of the circuit to an injected current 
<code>i</code>
 is determined by the formula in figure 3.33, whose structure is shown by the accompanying signal-flow diagram.
</p>
<p>Write a procedure 
<code>RC</code>
 that models this circuit. 
<code>RC</code>
 should take as inputs the values of 
<code>R</code>
, 
<code>C</code>
, and 
<code>dt</code>
 and should return a procedure that takes as inputs a stream representing the current 
<code>i</code>
 and an initial value for the capacitor voltage 
<code>v₀</code>
 and produces as output the stream of voltages 
<code>v</code>
. For example, you should be able to use 
<code>RC</code>
 to model an 
<code>RC</code>
 circuit with 
<code>R = 5</code>
 ohms, 
<code>C = 1</code>
 farad, and a 
<code>0.5</code>
-second time step by evaluating 
<code>(define RC1 (RC 5 1 0.5))</code>
. This defines 
<code>RC1</code>
 as a procedure that takes a stream representing the time sequence of currents and an initial capacitor voltage and produces the output stream of voltages.
</p>
