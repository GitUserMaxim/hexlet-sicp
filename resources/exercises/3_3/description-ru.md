<p>
    Измените процедуру 
    <code>make-account</code>
     так, чтобы она создавала счета, защищенные паролем. А именно, 
    <code>make-account</code>
     должна в качестве дополнительного аргумента принимать символ, например:
</p>
<pre><code>(define acc (make-account 100 'secret-password))</code></pre>
<p>
    Получившийся объект-счет должен обрабатывать запросы, только если они сопровождаются паролем, с которым счет был создан, а в противном случае он должен жаловаться:
</p>
<pre><code>((acc 'secret-password 'withdraw) 40)
<i>60</i>
((acc 'some-other-password 'deposit) 50)
<i>"Incorrect password"</i></code></pre>
