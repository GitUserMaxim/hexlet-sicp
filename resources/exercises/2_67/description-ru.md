<p>Пусть нам даны дерево кодирования и пример сообщения:</p>
<pre><code>(define sample-tree
  (make-code-tree (make-leaf 'A 4)
                  (make-code-tree
                   (make-leaf 'B 2)
                   (make-code-tree (make-leaf 'D 1)
                                   (make-leaf 'C 1)))))

(define sample-message '(0 1 1 0 0 1 0 1 0 1 1 1 0))
</code></pre>
<p>Раскодируйте сообщение при помощи процедуры 
<code>decode</code>
.
</p>
