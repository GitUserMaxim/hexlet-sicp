<p>Предположим, что мы представляем векторы 
<code>v = (vᵢ)</code>
 как последовательности чисел, а матрицы 
<code>m = (mᵢⱼ)</code>
 как последовательности векторов (рядов матрицы). Например, матрица
</p>
<img class="img-fluid" src="{{ asset("images/exercises/2_37.gif") }}" alt="2.37">
<p>представляется в виде последовательности 
<code>((1 2 3 4) (4 5 6 6) (6 7 8 9))</code>
. Имея такое представление, мы можем использовать операции над последовательностями, чтобы кратко выразить основные действия над матрицами и векторами. Эти операции (описанные в любой книге по матричной алгебре) следующие:
</p>
<p>
<code>(dot-product v w)</code>
 возвращает сумму 
<code>∑ᵢvᵢwᵢ</code>
</p>
<p>
<code>(matrix-*-vector m v)</code>
 возвращает вектор 
<code>t</code>
, где 
<code>tᵢ = ∑ⱼmᵢⱼvᵢ</code>
</p>
<p>
<code>(matrix-*-matrix m n)</code>
 возвращает матрицу 
<code>p</code>
, где 
<code>pᵢⱼ = ∑ₖmᵢₖnₖⱼ</code>
</p>
<p>
<code>(transpose m)</code>
 возвращает матрицу 
<code>n</code>
, где 
<code>nᵢⱼ = mⱼᵢ</code>
</p>
<p>Скалярное произведение мы можем определить так:</p>
<pre><code>(define (dot-product v w)
  (accumulate + 0 (map * v w)))
</code></pre>
<p>Заполните пропуски в следующих процедурах для вычисления остальных матричных операций. (Процедура 
<code>accumulate-n</code>
 описана в упражнении 
<a href="{{ route('exercises.show', App\Models\Exercise::findByPath('2.36')) }}">2.36</a>
.)</p>
<pre><code>(define (matrix-*-vector m v)
  (map &lt;??&gt; m))
(define (transpose mat)
  (accumulate-n &lt;??&gt; &lt;??&gt; mat))
(define (matrix-*-matrix m n)
  (let ((cols (transpose n)))
    (map &lt;??&gt; m)))
</code></pre>
