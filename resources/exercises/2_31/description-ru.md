<p>Абстрагируйте свой ответ на упражнение <a href="{{ route('exercises.show', App\Models\Exercise::findByPath('2.30')) }}">2.30</a>
, получая процедуру 
<code>tree-map</code>
, так, чтобы 
<code>square-tree</code>
 можно было определить следующим образом:
</p>
<pre><code>(define (square-tree tree) (tree-map square tree))
</code></pre>
