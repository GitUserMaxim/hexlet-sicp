<p>
    Дек (deque, double-ended queue, «двусторонняя очередь») представляет собой последовательность, элементы в которой могут добавляться и уничтожаться как с головы, так и с хвоста. На деках определены такие операции: конструктор 
    <code>make-deque</code>,
    предикат
    <code>empty-deque?</code>,
    селекторы
    <code>front-deque</code>
    и
    <code>rear-deque</code>,
    и мутаторы
    <code>front-insert-deque!</code>,
    <code>rear-insert-deque!</code>,
    <code>front-delete-deque!</code>
    и
    <code>rear-delete-deque!</code>.
    Покажите, как представить дек при помощи пар, и напишите реализацию операций. Все операции должны выполняться за Θ(1) шагов.
</p>
