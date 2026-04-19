<p>Consider the problem of representing line segments in a plane. Each segment is represented as a pair of points: a starting point and an ending point. Define a constructor 
<code>make-segment</code>
 and selectors 
<code>start-segment</code>
 and 
<code>end-segment</code>
 that define the representation of segments in terms of points. Furthermore, a point can be represented as a pair of numbers: the 
<code>x</code>
 coordinate and the 
<code>y</code>
 coordinate. Accordingly, specify a constructor 
<code>make-point</code>
 and selectors 
<code>x-point</code>
 and 
<code>y-point</code>
that define this representation. Finally, using your selectors and constructors, define a procedure 
<code>midpoint-segment</code>
 that takes a line segment as argument and returns its midpoint (the point whose coordinates are the average of the coordinates of the endpoints). To try your procedures, you'll need a way to print points:
</p>
<pre><code>(define (print-point p)
  (newline)
  (display "(")
  (display (x-point p))
  (display ",")
  (display (y-point p))
  (display ")"))
</code></pre>
