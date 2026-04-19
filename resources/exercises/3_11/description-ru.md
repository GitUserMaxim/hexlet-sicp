<p>
    В разделе 
    <a href="{{ getChapterOriginLinkForNumber('3.2.3') }}">3.2.3</a>
     мы видели, как модель с окружениями описывает поведение процедур, обладающих внутренним состоянием. Теперь мы рассмотрели, как работают локальные определения. Типичная процедура с передачей сообщений пользуется и тем, и другим. Рассмотрим процедуру моделирования банковского счета из раздела 
    <a href="{{ getChapterOriginLinkForNumber('3.1.1') }}">3.1.1</a>
    :
</p>
<pre><code>(define (make-account balance)
  (define (withdraw amount)
    (if (>= balance amount)
        (begin (set! balance (- balance amount))
               balance)
        "Insufficient funds"))
  (define (deposit amount)
    (set! balance (+ balance amount))
    balance)
  (define (dispatch m)
    (cond ((eq? m 'withdraw) withdraw)
          ((eq? m 'deposit) deposit)
          (else (error "Unknown request -- MAKE-ACCOUNT"
                       m))))
  dispatch)</code></pre>
<p>
    Покажите, какая структура окружений создается последовательностью действий
</p>
<pre><code>(define acc (make-account 50))

((acc 'deposit) 40)
<i>90</i>

((acc 'withdraw) 60)
<i>30</i></code></pre>
<p>
    Где хранится внутреннее состояние
    <code>acc</code>
    ? Предположим, что мы определяем еще один счет
</p>
<pre><code>(define acc2 (make-account 100))</code></pre>
<p>
    Каким образом удается не смешивать внутренние состояния двух счетов? Какие части структуры окружений общие у 
    <code>acc</code>
     и 
    <code>acc2</code>
   ?
</p>
