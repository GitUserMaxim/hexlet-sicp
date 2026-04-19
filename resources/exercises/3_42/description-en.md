<p>Ben Bitdiddle suggests that it's a waste of time to create a new serialized procedure in response to every 
<code>withdraw</code>
 and 
<code>deposit</code>
 message. He says that 
<code>make-account</code>
 could be changed so that the calls to 
<code>protected</code>
 are done outside the 
<code>dispatch</code>
 procedure. That is, an account would return the same serialized procedure (which was created at the same time as the account) each time it is asked for a withdrawal procedure.
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
  (let ((protected (make-serializer)))
    (let ((protected-withdraw (protected withdraw))
          (protected-deposit (protected deposit)))
      (define (dispatch m)
        (cond ((eq? m 'withdraw) protected-withdraw)
              ((eq? m 'deposit) protected-deposit)
              ((eq? m 'balance) balance)
              (else (error "Unknown request -- MAKE-ACCOUNT"
                           m))))
      dispatch)))
</code></pre>
<p>Is this a safe change to make? In particular, is there any difference in what concurrency is allowed by these two versions of 
<code>make-account</code>
?
</p>
