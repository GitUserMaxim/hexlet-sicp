<p>
    Consider the bank account objects created by 
    <code>make-account</code>
    , with the password modification described in exercise 
    <a title="3.3" href="{{ route('exercises.show', App\Models\Exercise::findByPath('3.3')) }}">3.3</a>
    . Suppose that our banking system requires the ability to make joint accounts. Define a procedure 
    <code>make-joint</code>
     that accomplishes this. 
    <code>Make-joint</code>
     should take three arguments. The first is a password-protected account. The second argument must match the password with which the account was defined in order for the 
    <code>make-joint</code>
     operation to proceed. The third argument is a new password. 
    <code>Make-joint</code>
     is to create an additional access to the original account using the new password. For example, if 
    <code>peter-acc</code>
     is a bank account with password 
    <code>open-sesame</code>
    , then
</p>
<pre><code>(define paul-acc
    (make-joint peter-acc 'open-sesame 'rosebud))</code></pre>
<p>
    will allow one to make transactions on 
    <code>peter-acc</code>
     using the name 
    <code>paul-acc</code>
     and the password 
    <code>rosebud</code>
    . You may wish to modify your solution to exercise 
    <a title="3.3" href="{{ route('exercises.show', App\Models\Exercise::findByPath('3.3')) }}">3.3</a>
     to accommodate this new feature.
</p>
