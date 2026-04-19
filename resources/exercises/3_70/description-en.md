<p>It would be nice to be able to generate streams in which the pairs appear in some useful order, rather than in the order that results from an ad hoc interleaving process. We can use a technique similar to the 
<code>merge</code>
 procedure of exercise 
<a href="{{ route('exercises.show', App\Models\Exercise::findByPath('3.56')) }}">3.56</a>
, if we define a way to say that one pair of integers is ''less than'' another. One way to do this is to define a ''weighting function'' 
<code>W(i, j)</code>
 and stipulate that 
<code>(i₁, j₁)</code>
 is less than 
<code>(i₂, j₂)</code>
 if 
<code>W(i₁, j₁) ≤ W(i₂, j₂)</code>
. Write a procedure 
<code>merge-weighted</code>
 that is like 
<code>merge</code>
, except that it takes an additional argument 
<code>weight</code>
, which is a procedure that computes the weight of a pair, and is used to determine the order in which elements should appear in the resulting merged stream. Using 
<code>merge-weighted</code>
, generalize pairs to a procedure 
<code>weighted-pairs</code>
 that takes two streams, together with a procedure that computes a weighting function, and generates the stream of 
<code>pairs</code>
, ordered according to weight. Use your procedure to generate
</p>
<p>a. the stream of all pairs of positive integers 
<code>(i, j)</code>
 with 
<code>i ≤ j</code>
 ordered according to the sum 
<code>i + j</code>
.
</p>
<p>b. the stream of all pairs of positive integers 
<code>(i, j)</code>
 with 
<code>i ≤ j</code>
, where neither 
<code>i</code>
 nor 
<code>j</code>
 is divisible by 
<code>2</code>
, 
<code>3</code>
, or 
<code>5</code>
, and the pairs are ordered according to the sum 
<code>2i + 3j + 5ij</code>
.
</p>
