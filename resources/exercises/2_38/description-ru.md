<p>Процедура accumulate известна также как 
<code>fold-right</code>
 (правая свертка), поскольку она комбинирует первый элемент последовательности с результатом комбинирования всех элементов справа от него. Существует также процедура 
<code>fold-left</code>
 (левая свертка), которая подобна 
<code>fold-right</code>
, но комбинирует элементы в противоположном направлении:
</p>
<pre><code>(define (fold-left op initial sequence)
  (define (iter result rest)
    (if (null? rest)
        result
        (iter (op result (car rest))
              (cdr rest))))
  (iter initial sequence))
</code></pre>
<p>Каковы значения следующих выражений?</p>
<pre><code>(fold-right / 1 (list 1 2 3))

(fold-left / 1 (list 1 2 3))

(fold-right list nil (list 1 2 3))

(fold-left list nil (list 1 2 3))
</code></pre>
<p>Укажите свойство, которому должна удовлетворять 
<code>op</code>
, чтобы для любой последовательности 
<code>fold-right</code>
 и 
<code>fold-left</code>
 давали одинаковые результаты.
</p>
