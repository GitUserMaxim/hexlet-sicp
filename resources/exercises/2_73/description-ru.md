<p>В разделе 2.3.2 описывается программа, которая осуществляет символьное дифференцирование:</p>
<pre><code>(define (deriv exp var)
  (cond ((number? exp) 0)
        ((variable? exp) (if (same-variable? exp var) 1 0))
        ((sum? exp)
         (make-sum (deriv (addend exp) var)
                   (deriv (augend exp) var)))
        ((product? exp)
         (make-sum
           (make-product (multiplier exp)
                         (deriv (multiplicand exp) var))
           (make-product (deriv (multiplier exp) var)
                         (multiplicand exp))))
        &lt;more rules can be added here&gt;
        (else (error "unknown expression type -- DERIV" exp))))
</code></pre>
<p>Можно считать, что эта программа осуществляет диспетчеризацию по типу выражения, которое требуется продифференцировать. В этом случае «меткой типа» элемента данных является символ алгебраической операции (например, 
<code>+</code>
), а операция, которую нужно применить – 
<code>deriv</code>
. Эту программу можно преобразовать в управляемый данными стиль, если переписать основную процедуру взятия производной в виде
</p>
<pre><code>(define (deriv exp var)
   (cond ((number? exp) 0)
         ((variable? exp) (if (same-variable? exp var) 1 0))
         (else ((get 'deriv (operator exp)) (operands exp)
                                            var))))
(define (operator exp) (car exp))
(define (operands exp) (cdr exp))
</code></pre>
<p>а. Объясните, что происходит в приведенном фрагменте кода. Почему нельзя включить в операцию выбора, управляемого данными, предикаты 
<code>number?</code>
 и 
<code>same-variable?</code>
?
</p>
<p>б. Напишите процедуры для вычисления производных от суммы и произведения, а также дополнительный код, чтобы добавить их к таблице, которой пользуется приведенный фрагмент.</p>
<p>в. Выберите еще какое-нибудь правило дифференцирования, например для возведения в степень (упражнение <a href="{{ route('exercises.show', App\Models\Exercise::findByPath('2.56')) }}">2.56</a>
), и установите его в систему.</p>
<p>г. В этой простой алгебраической системе тип выражения — это алгебраическая операция верхнего уровня. Допустим, однако, что мы индексируем процедуры противоположным образом, так что строка диспетчеризации в 
<code>deriv</code>
 выглядит как</p>
<pre><code>((get (operator exp) 'deriv) (operands exp) var)
</code></pre>
<p>Какие изменения потребуются в системе дифференцирования?</p>
