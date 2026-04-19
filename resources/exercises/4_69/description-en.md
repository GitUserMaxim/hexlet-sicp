<p>Beginning with the data base and the rules you formulated in exercise <a href="{{ route('exercises.show', App\Models\Exercise::findByPath('4.63')) }}">4.63</a>
, devise a rule for adding ''
<code>greats</code>
 to a grandson relationship. This should enable the system to deduce that Irad is the great-grandson of Adam, or that Jabal and Jubal are the great-great-great-great-great-grandsons of Adam. (Hint: Represent the fact about Irad, for example, as 
<code>((great grandson) Adam Irad)</code>
. Write rules that determine if a list ends in the word grandson. Use this to express a rule that allows one to derive the relationship 
<code>((great . ?rel) ?x ?y)</code>
, where 
<code>?rel</code>
 is a list ending in grandson.) Check your rules on queries such as 
<code>((great grandson) ?g ?ggs)</code>
 and 
<code>(?relationship Adam Irad)</code>
.
</p>
