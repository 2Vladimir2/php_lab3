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

*<?php


$transactions = [
    [
        "transaction_id" => 1,
        "transaction_date" => "2019-01-01",
        "transaction_amount" => 100.00,
        "transaction_description" => "Payment for groceries",
        "merchant_name" => "SuperMart",
    ],
    [
        "transaction_id" => 2,
        "transaction_date" => "2020-02-15",
        "transaction_amount" => 75.50,
        "transaction_description" => "Dinner with friends",
        "merchant_name" => "Local Restaurant",
    ],
    [
        "transaction_id" => 3,
        "transaction_date" => "2021-03-20",
        "transaction_amount" => 50.25,
        "transaction_description" => "Online shopping",
        "merchant_name" => "TechStore",
    ],
    [
        "transaction_id" => 4,
        "transaction_date" => "2022-04-05",
        "transaction_amount" => 120.75,
        "transaction_description" => "Movie tickets",
        "merchant_name" => "CinemaMax",
    ],
    [
        "transaction_id" => 5,
        "transaction_date" => "2023-05-10",
        "transaction_amount" => 30.50,
        "transaction_description" => "Coffee with colleagues",
        "merchant_name" => "CafeBlend",
    ],
];
?>

<table border="1">
    <tr style="background-color: #a6a6a6; color: #252525">
        <th colspan="5">Транзакции</th>
    </tr>
    <tr style="background-color: #a6a6a6; color: #252525">
        <th>ID</th>
        <th>Дата</th>
        <th>Сумма транзакции</th>
        <th>Описание транзакции</th>
        <th>Название организации</th>
    </tr>

    <?php
    foreach ($transactions as $transaction) {
    ?>
        <tr>
            <td><?php echo $transaction["transaction_id"]; ?></td>
            <td><?php echo $transaction["transaction_date"]; ?></td>
            <td><?php echo $transaction["transaction_amount"]; ?></td>
            <td><?php echo $transaction["transaction_description"]; ?></td>
            <td><?php echo $transaction["merchant_name"]; ?></td>
        </tr>
    <?php
    }
    ?>
</table>


*<img width="597" alt="image" src="https://github.com/2Vladimir2/php_lab3/assets/159247721/58b8a50d-ea28-4b88-abfa-2b338370a303">;

*4. Определение 3 пользовательские функции и выведите их значение на экран*

*<img width="198" alt="image" src="https://github.com/2Vladimir2/php_lab3/assets/159247721/9f2538fc-f7a0-4e06-8e2f-63fbe5153388">*

*4.1. Функция calculateTotalAmount() рассчитывает общую сумму всех
транзакций.*

* *

*4.2. Функция calculateAverage() рассчитывает среднее арифметическое
всех транзакций*

* * 

*4.3. Функция mapTransactionDescriptions() возвращает новый массив,
содержащий только описания транзакций.*

* *







