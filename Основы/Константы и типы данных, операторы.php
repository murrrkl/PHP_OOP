<div>
  <span>
    Текущая дата: <?= date('d.m.Y H:i:s') ?>
  </span>
</div>
<?php
// <?php eho можно заменить <?=

$user_name = "Jack";
echo $user_name . "<br>";

// Константы
define("DB_LOGIN", "root");
echo DB_LOGIN . "<br>";

define("COLORS", ["red", "green"]);
echo COLORS[0] . "<br>";
// Проверка наличия константы
echo defined("COLORS") . "<br>";

// Встроенные константы
echo __DIR__, "<br>"; // путь до текущей директории
echo __FILE__, "<br>"; // путь до текущего файла
echo __LINE__, "<br>"; // номер текущей строки
echo PHP_VERSION, "<br>"; // версия php

// Типы данных
// string
$name = "Аня";
echo gettype($name) . "<br>";
echo is_string($name) . "<br>"; // 1 (true), "" (false)

// var_dump() - выводит информацию о переменной
echo var_dump($name) . "<br>"; // кодируется: 2 байта - 1 русский символ

// int (integer)
$num = 33;
echo PHP_INT_MAX . "<br>"; // Максимальное значение
is_int($num); // 1 - true, "" - false

// float
$a = 3.5;
$b = 5E2; // 5 * 10^2
$c = 5E-2; // 5 * 10 ^ -2 == 0.5
echo "a = $a b = $b c = $c <br>";

is_float($a); // 3.5 - число с плавающей точкой

// bool
$rain = true;

$var = null; // остутсвие значения
is_null($var); // 1 - true

//array
$arr_number = [1, 3, 54, 55];
$arr_number[2];

// ассоциативный массив
$arr_user = ["name" => "Nick", "age" => 33];
echo $arr_user["name"] . "<br>";

is_array($arr_user);
echo "<pre>";
print_r($arr_user);
echo "</pre>";

// Resource - это переменная содержащая ссылку на какой-либо внешний ресурс
$book = fopen('dir/noob.txt', 'r');
is_resource($book);

// Object
$mysql = new Mysqli('localhost', 'root', 'password', 'name_bd');
echo var_dump($mysql);

// Неявное приведение типа
$a = 5; // int
$a = $a * 1.5; // double
$a = $a . "строка"; // string

echo "3.14pi" * 2; // 6.28

// Принудительное приведение типа
$b = 3;
$b = (string) $b;
$b = (float) $b;
$b = (bool) $b; // 1 - true "" - false

$c = "33";
$c = int($c); 
$c = array($c); // [0 => 33] 

// Операторы
$x = 5;
$y = 2;

$x + $y;
$x += 3;

$x - $y;
$x * $y;
$x / $y;
$x % $y;
$x ** 3;
$x ** (1/2); // Квадратный корень

$x .= "rub";

// Инкримент и декримент
$x = 10;
$x++; 
$x--;

echo $x++; // 10 // Постинкремент

$x = 10;
echo ++$x; // Преинкримент 11

$str = "A";
echo ++$str; // B

$str = "Z";
echo ++$str; // AA

// Операторы сравнения
$a = 33;
$b = "33";

$a == "33"; // true
$a === "33"; // false

$c = true;
$d = false;

!$d; // true
$c || $d; // 1 или 0 == 1
$c && $d; // 1 и 0 == 0

// Исключающее или
$x xor $d; // только олин из них true => true

?> 