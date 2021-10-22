<?php

require_once 'MultitonInterface.php';
require_once 'MultitonTrait.php';
require_once 'Multiton.php';

echo '<br><br>= patterns/object-pool/index.php =<br><br>';
echo '------- patterns/object pool ------- <br>';

/**
 * ПУЛ ОБЪЕКТОВ (OBJECT POOL)
 * 
 * Порождающий шаблон проектирования, это класс (СИНГЛТОН)
 * с набором инициализированых и готовых к использованию объектов.
 * Когда нужно получить объект, он не создается, а берется из пула.
 * После использования объект обязан вернуться в начальное состояние
 * 
 * Это удобно, например в цикле, когда не нужно усл. сотни раз создавать
 * один и тот же объект, а можно брать уже готовый
 */

// Примера нет, но вы держитесь

/** есть класс - ObjectPool 
 * В нём свойства - $prototypes = [] - массив всех прототипов
 * и $clones = [] - массив объектов, которые сейчас клонированы и используются
 * И свойства:
 *      addObj($obj) - добавляет в массив $prorotypes объект из параметра
 *      getObjKey($obj) - возвращает ключ, по которому будет хранится объект
 *      getObj($className) - возвращает объект по ключу, который получается из getObjKey($className)
 *      release($obj) - по ключу удаляет объект из массива $clones
 * 
*/


echo '<br> ==========================';