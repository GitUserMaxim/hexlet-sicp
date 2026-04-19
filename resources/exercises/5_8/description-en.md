<p>The following register-machine code is ambiguous, because the label 
<code>here</code>
 is defined more than once:
</p>
<pre><code>start
  (goto (label here))
here
  (assign a (const 3))
  (goto (label there))
here
  (assign a (const 4))
  (goto (label there))
there</code></pre>
<p>With the simulator as written, what will the contents of register a be when control reaches 
<code>there</code>
? Modify the 
<code>extract-labels</code>
 procedure so that the assembler will signal an error if the same label name is used to indicate two different locations.
</p>
