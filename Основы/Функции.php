<?php
function foo_sum(int $a = 10, int $b = 10): int {
  return $a + $b;
}

echo foo_sum(12, 7);
echo foo_sum("2", 7) . "<br>";

// & привязка к глобальной переменной
function foo_change(&$x) {
  $x .= " рублей";
  return $x;
}

// или через global
function foo_change1() {
  global $x;
  $x .= " рублей";
  return $x;
}

$x = 500;
foo_change1($x);
echo $x . "<br>";

// Константа видна в функции
define("LOGIN", "admin");

function show_login() {
  return LOGIN;
}

echo show_login() . "<br>";

// Статические переменные - привязка к функции - увеличивается при каждом вызове функции
function count_up() {
  static $count = 0;
  $count++;
  echo $count . "<br>";
}

// Если файл не получится подключить - выдаст фатальную ошибку и прекратит выполнение кода
// include - выдаст предупреждение и продолжит выполнение кода дальше
// require("Функции.php");


count_up();
count_up();
count_up();

$arr = [1, 2, 3];
// Анонимные функции
$average = function(array $arr) {
  return array_sum($arr) / count($arr);
};

echo "среднее значение:" . $average($arr) ."<br>";

// Математические и строковые функции
abs(-20); // модуль числа
sqrt(25); // квадратный корень
pow(9, 3); // степень
pow(9, 1/3); // кубический корень

M_PI; // Число pi
M_E; // число e

round(12.55, 1); // округление до 10-x 12.6
round(123, -1); // округление до 10-тков 120
echo floor(33.99); // округление в меньшую сторону
echo ceil(33.01); // округление в большую сторону

mt_rand(1, 100); // рандом
min(5, 4, -2);

$arr = [0, 3, 5];
max($arr);

strlen("KIKO"); // Длина строки
mb_strlen("русский"); // Длина строки (для кириллицы)
ucfirst("london"); // первая буква большая
lcfirst("London"); // первая буква маленькая
ucwords("ha ha ha"); // все слова с заглавных букв

strtoupper("kiko"); // UPPER CASE
strtolower("KIKO"); // lower case

$date = "31.12.2013";

$date = str_replace(".", "-", $date); // 31-12-2013
$date = substr_replace($date, "2024", -4, 4); // Замена в подстроке c заданной позиции (-4) заданное кол-во символов (4) на заданную подстроку
echo "<br>" . $date . "<br>";

echo trim("    lol    "); // Удаление пробелов с конца и с начала указанные символы
echo trim("@!lol!", "!@"); // Удаляет с конца и с начала указанные символы

strrev("mk"); // строка наоборот (не работает с кириллицей)
strip_tags("<p> fdff </p>"); // Удаляет html теги
strip_tags("<p> fdff </p>", ['<b>']); // вторым параметром можно указать тег, который не будет удалён

md5("123456"); // хеширование - шифрование
password_hash("122343", PASSWORD_DEFAULT); // 255
?>