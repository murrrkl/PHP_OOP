<?php

namespace App\Main;

use App\Core\Log;

// Класс, объект, методы и свойства
// Модификаторв доступа, инкапсуляция - сокрытие реализации, понятие интерфейс

class Person {
  protected $name; /* Свойство унаследуют наследники */

  public function setName($value) {
    $this->name = $value;

    $array = ["Misha", "Dima"];

     // Логирование класса
    $log = Log::setPathByClass(__CLASS__); // App\Main\Person
    $log->log("Log class " . $value . " " . json_encode($array));
  }

  public function getName() {
    $log = Log::setPathByMethod(__METHOD__); // App\Main\Person::getName
    $log->log("Log method " . $this->name);
    
    return $this->name;
  }

  public function getClass() {
    return __CLASS__;
  }

  public function getMethod() {
    return __METHOD__;
  }
}
?>