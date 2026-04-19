<p>The 
<code>encode</code>
 procedure takes as arguments a message and a tree and produces the list of bits that gives the encoded message.
</p>
<pre><code>(define (encode message tree)
  (if (null? message)
      '()
      (append (encode-symbol (car message) tree)
              (encode (cdr message) tree))))
</code></pre>
<p>
<code>Encode-symbol</code>
 is a procedure, which you must write, that returns the list of bits that encodes a given symbol according to a given tree. You should design 
<code>encode-symbol</code>
 so that it signals an error if the symbol is not in the tree at all. Test your procedure by encoding the result you obtained in exercise 
<a href="{{ route('exercises.show', App\Models\Exercise::findByPath('2.67')) }}">2.67</a>
 with the sample tree and seeing whether it is the same as the original sample message.</p>
