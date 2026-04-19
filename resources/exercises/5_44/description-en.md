<p>In this section we have focused on the use of the compile-time environment to produce lexical addresses. But there are other uses for compile-time environments. For instance, in exercise <a href="{{ route('exercises.show', App\Models\Exercise::findByPath('5.38')) }}">5.38</a>
 we increased the efficiency of compiled code by open-coding primitive procedures. Our implementation treated the names of open-coded procedures as reserved words. If a program were to rebind such a name, the mechanism described in exercise <a href="{{ route('exercises.show', App\Models\Exercise::findByPath('5.38')) }}">5.38</a>
 would still open-code it as a primitive, ignoring the new binding. For example, consider the procedure</p>
<pre><code>(lambda (+ * a b x y)
  (+ (* a x) (* b y)))
</code></pre>
<p>which computes a linear combination of 
<code>x</code>
 and 
<code>y</code>
. We might call it with arguments 
<code>+matrix</code>
, 
<code>*matrix</code>
, and four matrices, but the open-coding compiler would still open-code the 
<code>+</code>
 and the 
<code>*</code>
 in 
<code>(+ (* a x) (* b y))</code>
 as primitive 
<code>+</code>
 and 
<code>*</code>
. Modify the open-coding compiler to consult the compile-time environment in order to compile the correct code for expressions involving the names of primitive procedures. (The code will work correctly as long as the program does not 
<code>define</code>
 or 
<code>set!</code>
 these names.)
</p>
