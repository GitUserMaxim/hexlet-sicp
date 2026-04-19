<p>The following rules implement a 
<code>next-to</code>
 relation that finds adjacent elements of a list:
</p>
<pre><code>(rule (?x next-to ?y in (?x ?y . ?u)))

(rule (?x next-to ?y in (?v . ?z))
      (?x next-to ?y in ?z))
</code></pre>
<p>What will the response be to the following queries?</p>
<pre><code>(?x next-to ?y in (1 (2 3) 4))

(?x next-to 1 in (2 1 3 1))
</code></pre>
