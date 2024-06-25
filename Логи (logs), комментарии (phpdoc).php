<?php

// Логирование
require './App/classes/Core/Log.php';
require './App/classes/Main/Person.php';

// echo \App\Core\Log::getValidPath("\as\adsd\dsd/");
\App\Core\Log::setRootLogDir("./logs");

// $log = new App\Core\Log("test/logs\sad.log");
// $log->log("test");

$person = new \App\Main\Person();
$person->setName("Dima");
echo $person->getName();

?>