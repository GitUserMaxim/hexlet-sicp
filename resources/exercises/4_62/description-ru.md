<p>Определите правила, которые реализуют операцию 
<code>last-pair</code>
 из упражнения 
<a href="{{ route('exercises.show', App\Models\Exercise::findByPath('2.17')) }}">2.17</a>
, которая возвращает последнюю пару непустого списка. Проверьте Ваши правила на таких запросах, как 
<code>(last-pair (3) ?x)</code>
, 
<code>(last-pair (1 2 3) ?x)</code>
 и 
<code>(last-pair (2 ?x) (3))</code>
. Правильно ли Ваши правила работают с запросами вида 
<code>(last-pair ?x (3))</code>
?
</p>
