## **Лабораторная работа №3
(Циклы, Массивы, Функции)**

## **1.1. Задание №1 Цикл For**

*<img width="640" alt="image" src="https://github.com/2Vladimir2/php_lab3/assets/159247721/9216198e-79a2-411d-ac81-42da633693b1">*

*Поменянный скрипт*
*
<?php
    $a = 0;
    $b = 0;

    echo "Начальные значения: a = $a, b = $b<br>";

    for ($i = 0; $i <= 5; $i++) {
        $a += 10;
        $b += 5;

        echo "Итерация $i: a = $a, b = $b<br>";
    }

    echo "<br>Конец цикла, и значение a = $a, а значение b = $b";
?>
*


