<p>We argued in section 4.1.6 that internal definitions for block structure should not be considered ''real'' 
<code>define</code>
s. Rather, a procedure body should be interpreted as if the internal variables being 
<code>define</code>
d were installed as ordinary 
<code>lambda</code>
 variables initialized to their correct values using 
<code>set!</code>
. Section 4.1.6 and exercise 
<a href="{{ route('exercises.show', App\Models\Exercise::findByPath('4.16')) }}">4.16</a>
 showed how to modify the metacircular interpreter to accomplish this by scanning out internal definitions. Modify the compiler to perform the same transformation before it compiles a procedure body.</p>
