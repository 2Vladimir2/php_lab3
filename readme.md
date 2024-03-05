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
?>*

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

3. Выведите полученный массив на экран.

*<?php

     // Определение пустого массива
       $arr = array();

     //  Генерация массива случайных чисел от 1 до 100
       for ($i = 0; $i < 10; $i++) { 
       $arr[] = rand(1, 100);
     }

     // Вывод полученного массива на экран
      echo "Сгенерированный массив: ";
      print_r($arr);
      
?>*

*Вывод на экран*

*<img width="366" alt="image" src="https://github.com/2Vladimir2/php_lab3/assets/159247721/4c35680e-bd05-498d-857f-cb9dd27fd247">*

## **1.4. Задание №4 Использование массивов и функций**

* 1. Определите следующий .php файл *
 
*<img width="488" alt="image" src="https://github.com/2Vladimir2/php_lab3/assets/159247721/2aaaaa4f-a23c-475f-a72a-768fa065d8b4">*

*Выведите на экран данные о транзакциях*

*<img width="566" alt="image" src="https://github.com/2Vladimir2/php_lab3/assets/159247721/71d15a3a-7b05-4fa8-802a-297b928cbb2c">*

*2. Выведите на экран данные о транзакциях*

*<img width="599" alt="image" src="https://github.com/2Vladimir2/php_lab3/assets/159247721/c20fd93a-017c-49e9-aea0-6b07335fa434">*

*3. Добавьте данные еще для 2-3 транзакций ассоциативный в массив*


*<img width="597" alt="image" src="https://github.com/2Vladimir2/php_lab3/assets/159247721/58b8a50d-ea28-4b88-abfa-2b338370a303">;

*4. Определение 3 пользовательские функции и выведите их значение на экран*

*<img width="198" alt="image" src="https://github.com/2Vladimir2/php_lab3/assets/159247721/9f2538fc-f7a0-4e06-8e2f-63fbe5153388">*

*4.1. Функция calculateTotalAmount() рассчитывает общую сумму всех
транзакций.*

*<img width="265" alt="image" src="https://github.com/2Vladimir2/php_lab3/assets/159247721/ca5c47e8-2869-477c-ac93-abd76954eb96">*

*4.2. Функция calculateAverage() рассчитывает среднее арифметическое
всех транзакций*

*<img width="343" alt="image" src="https://github.com/2Vladimir2/php_lab3/assets/159247721/2011c6cf-bb3a-44f9-bb57-787ac00d83b8">* 

*4.3. Функция mapTransactionDescriptions() возвращает новый массив,
содержащий только описания транзакций.*

*<img width="182" alt="image" src="https://github.com/2Vladimir2/php_lab3/assets/159247721/8313c17d-5fe3-4e47-91cc-3caf192181df">*









