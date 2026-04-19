<p>Бен Битобор утверждает, что следующий метод порождения Пифагоровых троек эффективнее, чем приведенный в упражнении <a href="{{ route('exercises.show', App\Models\Exercise::findByPath('4.35')) }}">4.35</a>
. Прав ли он? (Подсказка: найдите, сколько вариантов требуется рассмотреть.)</p>
<pre><code>(define (a-pythagorean-triple-between low high)
  (let ((i (an-integer-between low high))
        (hsq (* high high)))
    (let ((j (an-integer-between i high)))
      (let ((ksq (+ (* i i) (* j j))))
        (require (>= hsq ksq))
        (let ((k (sqrt ksq)))
          (require (integer? k))
          (list i j k))))))</code></pre>
