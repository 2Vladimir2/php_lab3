## **Лабораторная работа №3
(Циклы, Массивы, Функции)**

## **1.1. Задание №1 Цикл For**

*<img width="640" alt="image" src="https://github.com/2Vladimir2/php_lab3/assets/159247721/9216198e-79a2-411d-ac81-42da633693b1">*

*Поменянный скрипт*

*<?php

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

## **1.2. Задание №2 Цикл while**

*Напишите код задания №1 с помощью цикла while*

*<?php

    $a = 0;
    $b = 0;
    $i = 0;

    echo "Начальные значения: a = $a, b = $b<br>";

    while ($i <= 5) {
        $a += 10;
        $b += 5;
        echo "Итерация $i: a = $a, b = $b<br>";
        $i++;
    }

    echo "<br>Конец цикла, и значение a = $a, а значение b = $b";
?>
*

## **1.3. Задание №3 Определение массива**

1. Определение пустой массив $arr.

2. Напишите программу, которая будет генерировать массив случайных чисел
от 1 до 100 с помощью цикла for или while.

3. Выведите полученный массив на экран.*
