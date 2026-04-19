<p>
    В разделе 
    <a href="{{ getChapterOriginLinkForNumber('2.2.1') }}">2.2.1</a>
     была введена следующая процедура для добавления одного списка к другому:
</p>
<pre><code>(define (append x y)
  (if (null? x)
      y
      (cons (car x) (append (cdr x) y))))</code></pre>
<p>
    <code>Append</code>
     порождает новый список, по очереди наращивая элементы 
    <code>x</code>
     в начало 
    <code>y</code>
    . Процедура 
    <code>append!</code>
     подобна 
    <code>append</code>
    , но только она является не конструктором, а мутатором. Она склеивает списки вместе, изменяя последнюю пару 
    <code>x</code>
     так, что ее 
    <code>cdr</code>
     становится равным 
    <code>y</code>
    . (Вызов 
    <code> append!</code>
     с пустым 
    <code>x</code>
    является ошибкой.)
</p>
<pre><code>(define (append! x y)
  (set-cdr! (last-pair x) y)
  x)</code></pre>
<p>
    Здесь 
    <code>last-pair</code>
     — процедура, которая возвращает последнюю пару своего аргумента:
</p>
<pre><code>(define (last-pair x)
  (if (null? (cdr x))
      x
      (last-pair (cdr x))))</code></pre>
<p>
    Рассмотрим последовательность действий
</p>
<pre><code>(define x (list 'a 'b))
(define y (list 'c 'd))
(define z (append x y))
z
<i>(a b c d)</i>
(cdr x)
&lt;ответ&gt;
(define w (append! x y))
w
<i>(a b c d)</i>
(cdr x)
&lt;ответ&gt;</code></pre>
<p>
    Каковы будут пропущенные 
    <code>&lt;ответы&gt;</code>
    ? Объясните, нарисовав стрелочные диаграммы.
</p>
