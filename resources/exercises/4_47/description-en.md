<p>Louis Reasoner suggests that, since a verb phrase is either a verb or a verb phrase followed by a prepositional phrase, it would be much more straightforward to define the procedure 
<code>parse-verb-phrase</code>
 as follows (and similarly for noun phrases):
</p>
<pre><code>(define (parse-verb-phrase)
  (amb (parse-word verbs)
       (list 'verb-phrase
             (parse-verb-phrase)
             (parse-prepositional-phrase))))
</code></pre>
<p>Does this work? Does the program's behavior change if we interchange the order of expressions in the 
<code>amb</code>
?
</p>
