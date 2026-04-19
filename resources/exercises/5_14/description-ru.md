<p>Измерьте количество сохранений и максимальную глубину стека, требуемую для вычисления 
<code>n!</code>
 при различных малых значениях 
<code>n</code>
 с помощью факториальной машины, показанной на рисунке 5.11. По этим данным определите формулы в зависимости от 
<code>n</code>
 для числа сохранений и максимальной глубины стека, требуемых для вычисления 
<code>n!</code>
 при любом 
<code>n > 1</code>
. Обратите внимание, что это линейные функции от 
<code>n</code>
, и они определяются двумя константами. Чтобы увидеть статистику, Вам придется добавить к факториальной машине команды для инициализации стека и распечатки статистики. Можно также заставить машину в цикле считывать 
<code>n</code>
, вычислять факториал и печатать результат (как для машины НОД с рисунка 5.4), так, чтобы не нужно было все время вызывать 
<code>get-register-contents</code>
, 
<code>set-register-contents!</code>
 и 
<code>start</code>
.
</p>
<img class="img-fluid" src="{{ asset("images/exercises/5_14.gif") }}" alt="5.14">
<pre><code>(controller
  gcd-loop
    (assign a (op read))
    (assign b (op read))
  test-b
    (test (op =) (reg b) (const 0))
    (branch (label gcd-done))
    (assign t (op rem) (reg a) (reg b))
    (assign a (reg b))
    (assign b (reg t))
    (goto (label test-b))
  gcd-done
    (perform (op print) (reg a))
    (goto (label gcd-loop)))
</code></pre>
<p>Рис. 5.4. Машина НОД, которая считывает входные числа и печатает результат.</p>
<img class="img-fluid" src="{{ asset("images/exercises/5_12.gif") }}" alt="5.12">
<pre><code>(controller
   (assign continue (label fact-done))     ; set up final return address
 fact-loop
   (test (op =) (reg n) (const 1))
   (branch (label base-case))
   ;; Set up for the recursive call by saving n and continue.
   ;; Set up continue so that the computation will continue
   ;; at after-fact when the subroutine returns.
   (save continue)
   (save n)
   (assign n (op -) (reg n) (const 1))
   (assign continue (label after-fact))
   (goto (label fact-loop))
 after-fact
   (restore n)
   (restore continue)
   (assign val (op *) (reg n) (reg val))   ; val now contains n(n - 1)!
   (goto (reg continue))                   ; return to caller
 base-case
   (assign val (const 1))                  ; base case: 1! = 1
   (goto (reg continue))                   ; return to caller
 fact-done)
</code></pre>
<p>Рис. 5.11. Рекурсивная факториальная машина</p>
