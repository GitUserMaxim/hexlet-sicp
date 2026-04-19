<p>Modify the simulator so that it uses the controller sequence to determine what registers the machine has rather than requiring a list of registers as an argument to 
<code>make-machine</code>
. Instead of pre-allocating the registers in 
<code>make-machine</code>
, you can allocate them one at a time when they are first seen during assembly of the instructions.
</p>
