<?php
// Статичесике методв и свойства, статическое связывание

// Статиечкие свойства и методы принадлежат классами
// Обычные - объектам класса

class StaticObjectClass {
  public static $static_prop = "static property";
  public $object_prop = "object prop";

  public static function static_method() : string {
    return "static method()";
  }

  public function object_method() : string {
    return "object method()";
  }
}

$object = new StaticObjectClass();
echo $object->object_method() . "<br>";
echo StaticObjectClass::static_method() . "<br>";

$object::$static_prop = "Static property from object";
// Через объект
echo $object::$static_prop . "<br>"; 

// Через класс
StaticObjectClass::$static_prop = "Static property from class";
echo $object::$static_prop . "<br>";

// Cтатическое связывание
class A {
  public static function getMessage() : string {
    // self - обращение к методам и свойтсвам внутри данного класса (static)
    // return "Message - " . self::getString
    // позднее связывание - возьмётся последняя реализация потомка
    return "Message - " . static::getString();
  }

  public static function getString() : string {
    return "class A";
  }
}

class B extends A {
  public static function getString() : string {
    return "class B";
  }
}

echo A::getMessage() . "<br>";
echo B::getMessage() . "<br>";

?>