<p>a. An infinite continued fraction is an expression of the form </p>
<pre><code>f =         N₁
        -------------
        D₁ +     N₂
             -----------
             D₂ +   N₃
                -----------
                D₃ + ...
</code></pre>
<p>As an example, one can show that the infinite continued fraction expansion with the 
<code>Ni</code>
 and the 
<code>Di</code>
 all equal to 1 produces 
<code>1/φ</code>
, where 
<code>φ</code>
 is the golden ratio (described in section 1.2.2). One way to approximate an infinite continued fraction is to truncate the expansion after a given number of terms. Such a truncation -- a so-called 
<code>k</code>
-term finite continued fraction -- has the form 
</p>
<pre><code>      N₁
---------------
D₁ +   N₂
    -----------
    +     Nk
        -------
          Dk
</code></pre>
<p>Suppose that 
<code>n</code>
 and 
<code>d</code>
 are procedures of one argument (the term index 
<code>i</code>
) that return the 
<code>Ni</code>
 and 
<code>Di</code>
 of the terms of the continued fraction. Define a procedure 
<code>cont-frac</code>
 such that evaluating 
<code>(cont-frac n d k)</code>
 computes the value of the 
<code>k</code>
-term finite continued fraction. Check your procedure by approximating 
<code>1/φ</code>
 using 
</p>
<pre><code>(cont-frac (lambda (i) 1.0)
           (lambda (i) 1.0)
           k)
</code></pre>
<p>or successive values of 
<code>k</code>
. How large must you make 
<code>k</code>
 in order to get an approximation that is accurate to 4 decimal places?
</p>
<p>b. If your 
<code>cont-frac</code>
 procedure generates a recursive process, write one that generates an iterative process. If it generates an iterative process, write one that generates a recursive process.
</p>
