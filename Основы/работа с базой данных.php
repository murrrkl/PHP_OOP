<?php

// Константы
define("SERVERNAME", "localhost"); // Хост
define("DB_LOGIN", "root"); // Логин
define("DB_PASSWORD", "pass");
define("DB_NAME", "new_bd"); // Название БД

$connect = new mysqli(SERVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME);
$sql = "UPDATE 'table_name' SET 'prop_name' = 50 WHERE 'prop_name' = 'val'"; // запрос

// выполнить запрос
if ($connect->query($sql) === TRUE) {
  echo "record update";
} else {
  echo "error record";
}
$connect->close(); // Закрываем соединений с БД

// Вывод на страницу информации из БД
$sql = "SELECT * FROM 'table_name' WHERE 'prop_name' > 3 AND 'prop_name' > 5 ORDER BY 'prop_name' DESC"; // запрос

// выполнить запрос
$result = $connect->query($sql); // Возвращает объект

// ДЛЯ ОДНОЙ СТРОКИ
$user = $result->fetch_assoc(); // превращает объект в массив 

foreach ($user as $key => $v) {
  echo "$key : $v";
}

// ДЛЯ НЕСКОЛЬКИХ ЗАПИСЕЙ
$result = $connect->query($sql);

// Получаем ассоциативный массив (каждый элемент - отдельный массив (строка в бд))
for ($user = array(); $row = $result->fetch_assoc(); $user[] = $row); 

foreach ($user as $key => $v) {
  echo "<p>$v['prop_name'] | $v['prop_name'] </p>";
}

$connect->close();

?>

<form action="#" method="POST">
  <input type = "text" name = "age">
  <input type = "submit" name = "add">
</form>

<?php

if (isset($_POST["add"])) {
  $age = $_POST["age"] ?? 0;
  $connect = new mysqli(SERVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME);
  $sql = "INSERT INTO table_name' ('prop_name', 'prop_name') VALUES ('$age', '$age')";
  $connect->query($sql);
  $connect->close;
  
}

?>