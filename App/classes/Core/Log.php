<?php

namespace App\Core;


/**
  * Класс логов
  *
  * @package App\Log
  */
class Log {
  /** @var string $rootPathDir */
  private static $rootPathDir; // дефолтная папка логов
  private $pathLog; 
  const NEW_LOG_MESSAGE = "---NEW LOG----";
  
  public function __construct (string $path_value) {
    // Если дефолтная папк логов не задана
    if (empty(self::$rootPathDir)) {
      throw new \Exception("Must set root dir");
    }

    $path = $this->getValidPath($path_value);
    $this->pathLog = self::$rootPathDir . "/" . $path;

    // Если пути не существует
    if (!file_exists($this->pathLog)) {
      // Разбиение по / всего пути
      $arrayPath = explode("/", $path);
      $currentPathString = self::$rootPathDir . "/";

      foreach ($arrayPath as $key => $value) {
        $currentPathString .= $value . "/";

        // Если существует каталог - пропускаем
        if (file_exists($currentPathString)) {
          continue; // пропускаем 
        }

        // Пропускаем последний элемент - т.к. это название самого файла
        if ($key == count($arrayPath) - 1) {
          continue; // пропускаем
        }

        mkdir($currentPathString); // Создаём папки по заданному пути
        
      }
    }
  }

  /**
    * Возвращает объект класса Log с переданным namespace класса
    *
    * @param string $path_class
    *
    * Исключения (если есть)
    *
    * @return  Log
    */
  public static function setPathByClass( string $path_class): Log {
   return new Log($path_class . '.log');
  }

  public static function setPathByMethod( string $path_mehod): Log {
    $path_mehod = str_replace("::", "/", $path_mehod); // App\Main\Person/setName
    return new Log($path_mehod . '.log');
  }

  // запись в файл сообщения
  public function log(string $text) {
    // a+ запись в конец файла
    $file = fopen($this->pathLog, "a+");
    $message =  PHP_EOL . PHP_EOL . self::NEW_LOG_MESSAGE .  PHP_EOL . date("Y.m.d h:i:s") . PHP_EOL . $text;
    fwrite($file, $message);
    fclose($file); 
  }

  public static function setRootLogDir(string $root_path) {
    self::$rootPathDir = $root_path;
  }

  // Преобразуем путь к нормальному виду
  public function getValidPath(string $path_value) {
    $path = str_replace("\\", "/", $path_value); // Заменяем / на \
    $path = trim($path, '/'); // Убираем с начала и с конца /
    return $path;
  }

}

?>