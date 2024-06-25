<?php

namespace App\Main;

class City {
  private $name;
  private $people = [];

  public function setName($value) {
    $this->name = $value;
  }

  public function getName() {
    return $this->name;
  }

  public function addPerson(Person $person) {
    $this->people[] = $person; // добавление в массив
  }

  public function getPeople() {
    $result = "";

    /** @var Person $person */
    foreach ($this->people as $person) {
      $result .= $person->getName() . " ";
    }

    return $result;
  }
}
?>