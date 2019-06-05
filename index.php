<?php

$a = 5;
$b = '05';
var_dump($a == $b);         // Почему true? потому что после приведения $b превращается в 5 типа int
var_dump((int)'012345');     // Почему 12345? потому что после приведения отбрасывается первый 0
var_dump((float)123.0 === (int)123.0); // Почему false? потому что === это сравнение с учетом типа данных, а типы разные
var_dump((int)0 === (int)'hello, world'); // Почему true? после приведения (int)'hello, world' будет 0 так как в строке нет цифр111

$year = date("Y");

echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Document</title>
</head>
<body>
    <br>
    Текущий год $year
</body>
</html>";

//со звездочкой

$a = 3;
$b = 8;

echo "<br>a = $a <br> b = $b";

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "<br>a = $a <br> b = $b";

