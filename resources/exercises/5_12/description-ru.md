<p>При помощи имитатора можно определять пути данных, которые требуются для реализации машины с данным контроллером. Расширьте ассемблер и заставьте его хранить следующую информацию о модели машины:</p>
<ul>
    <li>список всех команд, с удаленными дубликатами, отсортированный по типу команды (
    <code>assign</code>
    , 
    <code>goto</code>
     и так далее).
    </li>
    <li>список (без дубликатов) регистров, в которых хранятся точки входа (это те регистры, которые упоминаются в командах 
    <code>goto</code>
    )
    </li>
    <li>список (без дубликатов) регистров, к которым применяются команды 
    <code>save</code>
     или 
    <code>restore</code>
    .
    </li>
    <li>для каждого регистра, список (без дубликатов) источников, из которых ему присваивается значение (например, для регистра 
    <code>val</code>
     в факториальной машине на рисунке 5.11 источниками являются 
    <code>(const 1)</code>
     и 
    <code>((op *) (reg n) (reg val))</code>
    ).
    </li>
</ul>
<p>Расширьте интерфейс сообщений машины и включите в него доступ к новой информации. Чтобы проверить свой анализатор, примените его к машине Фибоначчи с рисунка 5.12 и рассмотрите получившиеся списки.</p>
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
<p>Рис. 5.11. Рекурсивная факториальная машина.</p>
<pre><code>(controller
   (assign continue (label fib-done))
 fib-loop
   (test (op <) (reg n) (const 2))
   (branch (label immediate-answer))
   ;; set up to compute Fib(n - 1)
   (save continue)
   (assign continue (label afterfib-n-1))
   (save n)                           ; save old value of n
   (assign n (op -) (reg n) (const 1)); clobber n to n - 1
   (goto (label fib-loop))            ; perform recursive call
 afterfib-n-1                         ; upon return, val contains Fib(n - 1)
   (restore n)
   (restore continue)
   ;; set up to compute Fib(n - 2)
   (assign n (op -) (reg n) (const 2))
   (save continue)
   (assign continue (label afterfib-n-2))
   (save val)                         ; save Fib(n - 1)
   (goto (label fib-loop))
 afterfib-n-2                         ; upon return, val contains Fib(n - 2)
   (assign n (reg val))               ; n now contains Fib(n - 2)
   (restore val)                      ; val now contains Fib(n - 1)
   (restore continue)
   (assign val                        ;  Fib(n - 1) +  Fib(n - 2)
           (op +) (reg val) (reg n))
   (goto (reg continue))              ; return to caller, answer is in val
 immediate-answer
   (assign val (reg n))               ; base case:  Fib(n) = n
   (goto (reg continue))
 fib-done)
</code></pre>
<p>Рис. 5.12. Контроллер машины для вычисления чисел Фибоначчи.</p>
