<?php
// Абстрактные классы
// Должен содержать хотя бы один абстрактный метод
abstract class BaseModel {
  public function selectAll(): string {
    return 'SELECT * FROM ' . $this->getTableName();
  }

  abstract public function getTableName() : string;
}

// У потомков определяем абстрактный метод
class Article extends BaseModel {
  public function getTableName() :string {
    return "task";
  }
}

$task = new Article;
echo $task->selectAll();

?>