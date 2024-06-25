<?php
class Task {
  private $task;
  private $name;
  private $var;

  // Конструктор
  public function __construct(string $v1, string $v2,  string $v3) {
    $this->task = $v1;
    $this->name = $v2;
    $this->var = $v3;
  }

  public function getProps() {
    return  $this->task . ", " .  $this->name . ", " .  $this->var . "<br>";
  }

  public function setTask(string $param) {
    $this->task = $param;
    return $this; // Вернуть самого себя
  }

  public function setName(string $param) {
    $this->name = $param;
    return $this;
  }

  public function setVar(string $param) {
    $this->var = $param;
    return $this;
  }
}

$t = new Task("V1", "V2", "V3");

// $t->setTask("new v1");
// $t->setName("new v2");
// $t->setVar("new v3");
// Цепь методов method chaining
$t->setTask("new v1")->setName("new v2")->setVar("new v3");

echo $t->getProps();

?>