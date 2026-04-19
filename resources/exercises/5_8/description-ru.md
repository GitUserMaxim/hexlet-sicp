<p>Следующий код для регистровой машины неоднозначен, поскольку метка 
<code>here</code>
 определена более одного раза:
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
<p>Каково будет содержимое регистра a в нашем имитаторе, когда управление достигнет 
<code>there</code>
? Измените процедуру 
<code>extract-labels</code>
 так, чтобы ассемблер сообщал об ошибке в случае, когда одно и то же имя метки обозначает две различных точки в коде.
</p>
