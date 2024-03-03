<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
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
 
<?php
     // Определение пустого массива
       $arr = array();

     //  Генерация массива случайных чисел от 1 до 100
       for ($i = 0; $i < 10; $i++) { 
       $arr[] = rand(1, 100);
     }

     // Вывод полученного массива на экран
      echo "Сгенерированный массив: ";
      print_r($arr);
      
?>
 


</body>
</html>
