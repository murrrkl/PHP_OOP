<form action = "#" method = "POST">
  <input type = "text" name = "name" id = ""><br>
  <label for = "check">Я человек</label>
  <input id = "check" name = "check" type = "checkbox">
  <input type="submit" name = "submit" value = "вход">
</form>
<?php

if (isset($_POST["submit"])) {
  // $_POST суперглобальная переменная
  $name = trim($_POST["name"]);

  // + один и более символов
  // exit - прерывает работу скрипта и выводит сообщение
  if (!preg_match("&^[a-zA-Zа-яА-ЯёЁ]+$&u", $name)) {
    exit("имя не корректно!");
  }

  $check = $_POST["check"] ?? "off";

  if ($check == "on") {
    echo "$name доступ разрешён <br>";
  } else {
    echo "$name доступ запрещён! <br>";
  }
}

?>

<ul>
  <li><a href = "?name=test">Test</a</li>
  <li><a href = "?name=blog">Blog</a</li>
</ul>


<div class = "content">
  <?php
  $site_name = $_GET["name"] ?? "0";
  switch ($site_name) {
    case "blog":
      require_once "blog.php";
      break;
    case "test":
      require_once "test.php";
      break;
    default:
      echo "страница по умолчанию";
  }

  ?>
</div>