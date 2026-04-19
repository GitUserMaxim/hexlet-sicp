<p>Numbers that can be expressed as the sum of two cubes in more than one way are sometimes called Ramanujan numbers, in honor of the mathematician Srinivasa Ramanujan. Ordered streams of pairs provide an elegant solution to the problem of computing these numbers. To find a number that can be written as the sum of two cubes in two different ways, we need only generate the stream of pairs of integers 
<code>(i, j)</code>
, weighted according to the sum 
<code>i³ + j³</code>
 (see exercise 
<a href="{{ route('exercises.show', App\Models\Exercise::findByPath('3.70')) }}">3.70</a>
), then search the stream for two consecutive pairs with the same weight. Write a procedure to generate the Ramanujan numbers. The first such number is 
<code>1729</code>
. What are the next five?
</p>
