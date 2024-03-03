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

*<?php


//определение ассоциативного массива транзакций
$transactions = [
 [
 "transaction_id" => 1, // id
 "transaction_date" => "2019-01-01", // дата
 "transaction_amount" => 100.00, // сумма транзакции
 "transaction_description" => "Payment for groceries", // описание
 "merchant_name" => "SuperMart", // название организации
 ],
 [
 "transaction_id" => 2,
 "transaction_date" => "2020-02-15",
 "transaction_amount" => 75.50,
 "transaction_description" => "Dinner with friends",
 "merchant_name" => "Local Restaurant",
 ],
];
?>
<table border="1">
 <tr style="background-color: #a6a6a6; color: #252525">
 <th colspan="4">Оценки студентов</th>
 </tr>
 <tr style="background-color: #a6a6a6; color: #252525">
 <th>ID</th>
 <th>Дата</th>
 <th>Сумма транзакции</th>
 <th>Описание транзакции</th>
 <th>Название организации</th>
 </tr>
 <?php
 foreach ($transactions as $transaction) { ?>
 <tr>
 <!-- Выведите на экран данные о транзакциях -->
 </tr>

    
<?php }*
