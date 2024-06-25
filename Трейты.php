<?php
  // Трейты
  // - это механизм, реализующий повторное использование кода
  // Частично решает проблему с отстусвием множественного наследлвания в php
  // Трейт имеет реализацию, но объект трейта создать нельзя, статических свойств быть не может.

  trait BaseModel {
    public $sql;

    public function executeSql() {
      return $this->sql;
    }

    public function SelectAllFromDB() {
      $this->sql = "SELECT * FROM " . $this->getTableName();
    }

    abstract public function getTableName(): string;
  }


  class Article {
    use BaseModel; // Можно перечислить через запятую несколько
    public function getTableName(): string {
      return "articles";
    }

  }

  class User {
    use BaseModel;

    public function getTableName(): string {
      return "users";
    }

  }

  $article = new Article();
  $article->SelectAllFromDB();
  echo $article->executeSql() . "<br>";

  $user = new User();
  $user->SelectAllFromDB();
  echo $user->executeSql() . "<br>";

?>