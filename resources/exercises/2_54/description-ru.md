<p>Предикат 
<code>equal?</code>
 для двух списков возвращает истину, если они содержат одни и те же элементы в одинаковом порядке. Например,
</p>
<pre><code>(equal? '(this is a list) '(this is a list))
</code></pre>
<p>истинно, но</p>
<pre><code>(equal? '(this is a list) '(this (is a) list))
</code></pre>
<p>ложно. Более точно, можно определить 
<code>equal?</code>
 рекурсивно в терминах базового равенства символов 
<code>eq?</code>
, сказав, что 
<code>a</code>
 равно 
<code>b</code>
, если оба они символы и для них выполняется 
<code>eq?</code>
 либо оба они списки и при этом верно, что 
<code>(car a)</code>
 равняется в смысле 
<code>equal? (car b)</code>
, а 
<code>(cdr a)</code>
 равняется в смысле 
<code>equal? (cdr b)</code>
. Пользуясь этой идеей, напишите 
<code>equal?</code>
 в виде процедуры 
<code>equal-proc?</code>
.
</p>
