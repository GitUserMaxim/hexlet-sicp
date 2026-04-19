<p>При помощи результатов упражнений <a href="{{ route('exercises.show', App\Models\Exercise::findByPath('3.60')) }}">3.60</a>
 и <a href="{{ route('exercises.show', App\Models\Exercise::findByPath('3.61')) }}">3.61</a>
 определите процедуру 
<code>div-series</code>
, которая делит один степенной ряд на другой. 
<code>Div-series</code>
 должна работать для любых двух рядов, при условии, что ряд в знаменателе начинается с ненулевого постоянного члена. (Если в знаменателе постоянный член равен нулю, 
<code>div-series</code>
 должна сообщать об ошибке.) Покажите, как при помощи 
<code>div-series</code>
 и результата упражнения 
<a href="{{ route('exercises.show', App\Models\Exercise::findByPath('3.59')) }}">3.59</a>
 получить степенной ряд для тангенса.</p>
