<p>Вычисление многочлена с переменной 
<code>x</code>
 при данном значении 
<code>x</code>
 можно сформулировать в виде накопления. Мы вычисляем многочлен
</p>
<img class="img-fluid" src="{{ asset("images/exercises/2_34_1.gif") }}" alt="2.34.1">
<p>по известному алгоритму, называемому схема Горнера (Horner’s rule), которое переписывает формулу в виде</p>
<img class="img-fluid" src="{{ asset("images/exercises/2_34_2.gif") }}" alt="2.34.2">
<p>Другими словами, мы начинаем с 
<code>aₙ</code>
, умножаем его на 
<code>x</code>
, и так далее, пока не достигнем 
<code>a₀</code>
. Заполните пропуски в следующей заготовке так, чтобы получить процедуру, которая вычисляет многочлены по схеме Горнера. Предполагается, что коэффициенты многочлена представлены в виде последовательности, от 
<code>a₀</code>
 до 
<code>aₙ</code>
.
</p>
<pre><code>(define (horner-eval x coefficient-sequence)
  (accumulate (lambda (this-coeff higher-terms) &lt;??&gt;)
              0
              coefficient-sequence))
</code></pre>
<p>Например, чтобы вычислить 
<code>1 + 3x + 5x³ + x⁵</code>
 в точке 
<code>x = 2</code>
, нужно ввести
</p>
<pre><code>(horner-eval 2 (list 1 3 0 5 0 1))
</code></pre>
