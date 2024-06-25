<?php

namespace App\Main;

class Worker extends Person {
  protected $age;

  public function setAge($value) {
    $this->age = $value;
  }

  public function getAge() {
    return $this->age;
  }
}
?>