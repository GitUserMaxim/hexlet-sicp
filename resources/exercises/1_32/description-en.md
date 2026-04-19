<p>a. Show that 
<code>sum</code>
 and 
<code>product</code>
 (exercise 
<a href="{{ route('exercises.show', App\Models\Exercise::findByPath('1.31') )}}">1.31</a>
) are both special cases of a still more general notion called accumulate that combines a collection of terms, using some general accumulation function:</p>
<pre><code>(accumulate combiner null-value term a next b)
</code></pre>
<p>
<code>Accumulate</code>
 takes as arguments the same term and range specifications as 
<code>sum</code>
 and 
<code>product</code>
, together with a 
<code>combiner</code>
 procedure (of two arguments) that specifies how the current term is to be combined with the accumulation of the preceding terms and a 
<code>null-value</code>
 that specifies what base value to use when the terms run out. Write 
<code>accumulate</code>
 and show how 
<code>sum</code>
 and 
<code>product</code>
 can both be defined as simple calls to 
<code>accumulate</code>
.
</p>
<p>b. If your 
<code>accumulate</code>
 procedure generates a recursive process, write one that generates an iterative process. If it generates an iterative process, write one that generates a recursive process. 
</p>
