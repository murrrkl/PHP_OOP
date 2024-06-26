<div>
  <a href="?lang=ru">Русский</a>
  <a href="?lang=en">Английский</a>
</div>
<?php

$price = 99;

if ($price >= 100) {
  echo "Скидка 30%";
} elseif ($price >= 50) {
  echo "Скидка 15%";
} else {
  echo "Скидка 10%";
}

// Тернарный оператор

$discount = $price >= 100 ? 30: ($price >= 50 ? 15 : 10);

// isset() - определяет была ли установлена переменная значением отличным от NULL (существует ли она)

// empty - "", false, "0", 0, null

$user = "meow";

if (isset($user)):
  echo "hello $user";
  unset($user); // Удаляет переменную
endif;

$_SESSION["user"] = "Kiko"; // Сессия
$user = $_SESSION["user"] ?? 0; // Если существует помести его, иначе 0

if (empty($user)) {
  echo "Гость";
} else echo $user;

$lang = $_GET["lang"] ?? "ru"; // Если существует

switch ($lang) {
  case "en":
    echo "Hello World";
    break;
  case "ru":
    echo "Привет";
    break;
  default:
    echo ":c";
    break;       
}

for ($i = 1; $i <= 9; $i++) {
  if ($i == 5) continue;
  if ($i == 8) break;
  echo $i, " ";
}

$total = 0;

for ($i = 1; $i <= 100; $i++):
  $total += $i;
endfor;

$i = 0;

while ($i <= 4) {
  echo $i, " ";
  $i++;
}

do {
  $i++;
  echo $i, " ";
} while ($i <= 9);

$week = ["пн", "вт", "ср"];

foreach ($week as $day) {
  echo $day;
}

$week = [1 => "пн", "вт", "ср"];

foreach ($week as $key => $day) {
  echo "$key : $day";
}

$console = [
  0 => ["name" => "xbox", "price" => 45],
  1 => ["name" => "ps5", "price" => 45],
];

foreach ($console as $value) {
  echo "$value[name] ";
}

// Массивы
$month = ["январь", "февраль"];
unset($month[1]); // Удаляет жлемент по ключу
echo "<pre>";
print_r($month);
echo "</pre>";

$num = [12, 4, 5, 5, 1, 6];
sort($num); // по возрастанию
$num = array_unique($num); // Удаление одинаковых элементов (не меняеются ключи)
echo "<pre>";
print_r($num);
echo "</pre>";

echo "Сумма = " . array_sum($num) . "<br>";
echo "Произведение = " . array_product($num) . "<br>";
echo "Элементов = " . count($num) . "<br>";
echo in_array(5, $num) . "<br>";

$num2 = array_chunk($num, 2); // Разрезает массив на подмассивы, заданной длины (сам массив не меняется)


print_r(array_slice($num, 0, 3)); // С какого элемента и сколько элементов (сам массив не меняется)
echo "<pre>";
array_splice($num, 0, 3, ['a', 'b']); // С какого элемента и сколько элементов, на что меняет (сам массив меняется)
print_r($num);
echo "</pre>";

$fruit = ["яблоко" => 100, "банан" => 34];
asort($fruit);

foreach ($fruit as $key => $value) {
  echo "$key количество: $value шт. <br>";
}

$food = [
  "fruit" => ["kiwi", "banana"],
  "veggie" => ["tomato", "potato"]
];

echo $food["fruit"][0] . "<br>";
echo count($food, 1) . "<br>"; // 1 - рекурсия по массиву (выдаст 6)

foreach ($food as $k => $v) {
  echo "$k: <br>";
  foreach ($v as $key=> $value) {
    echo "$key: $value <br>" ;
  }
}

$arr = range(1, 5);
$arr2 = range(1, 10, 2);

$arr = array_merge($arr, $arr2); // Слияние

foreach ($arr as $v) {
  echo "$v ";
}

echo "<br>";

// Пересечение массивов
print_r(array_intersect($arr, [1, 75, 2]));

// Различие элементов массива
print_r(array_diff($arr, [1, 75, 2]));

// Преобразование массива
$str = "пн вт ср чт";
$arr = explode(" ", $str); // в массив
print_r($arr);

list($monday, $tuesday, $wednesday)=$arr; // помещение зачений из масисва в переменные
echo $wednesday . "<br>";

$str = implode("|", $arr); // в строку
print_r($str);

/*
sort
asort
array_merge
array_sum
array_unique
count
range
explode
implode
*/

?> 