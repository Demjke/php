<?php
$a = 5;
$b = '05';
var_dump($a == $b);           // 1. Сравнение с приведением типов
var_dump((int)'012345');      // 2. Приведение строки к целому
var_dump((float)123.0 === (int)123.0); // 3. Строгое сравнение
var_dump(0 == 'hello, world'); // 4. Сравнение с приведением типов
