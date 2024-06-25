<?php
// Интерфейсы
// Задаются public методы без тела
// Можно указать аргументы
// Можно указать, что возвращается
interface AInterface {
  public function getA();
  public function getB(string $param): array;
}

class A implements AInterface {
  public function getA() {
    echo "Метод A";
  }

  public function getB(string $a): array {
    return ["OK"];
  }

  public function getC() {
    echo "Можно добавлять свой метод";
  }
}

interface PersonInterface {
  public function get(): string;
  public function set(string $name);
}

interface CityInterface {
  public function setPerson(Person $person);
  public function getPersons(): array;
}

class Person implements PersonInterface {
  private $name;

  public function get(): string {
    return $this-> name;
  }

  public function set(string $n) {
    $this->name = $n;
  }
}

class City implements CityInterface {
  private $persons = [];
  public function setPerson(Person $person) {
    $this->persons[] = $person->get();
  }

  public function getPersons(): array {
    return $this->persons;
  }
}

$p1 = new Person();
$p1->set("Kiko");

$p2 = new Person();
$p2->set("Riko");

$c1 = new City();

$c1->setPerson($p1);
$c1->setPerson($p2);

print_r($c1->getPersons());

?>