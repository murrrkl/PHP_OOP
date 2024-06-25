<?php
    // require "App/main/Person.php";
    // require "App/main/City.php";
    // require "App/main/Worker.php";
    // require "App/main/Programmist.php";

    // Пространство имён (namespace), автолоад (autoload)
    require "vendor/autoload.php";


    $p1 = new App\Main\Person();
    $p1->setName("Миша");


    $p2 = new App\Main\Person();
    $p2->setName("Толя");

    echo $p1->getName() . " " . $p2->getName();

    $moscow = new App\Main\City();
    $moscow->setName("Моscow");

    $moscow->addPerson($p1);
    $moscow->addPerson($p2);

    echo "<br> В Москве живут " . $moscow->getPeople();

    // Наследование

    $w1 = new App\Main\Worker();
    $w1->setName("Коля");
    $w1->setAge(12);

    echo "<br>" . $w1->getName() . " " . $w1->getAge();


    $pr1 = new App\Main\Programmist();
    $pr1->setName("Антон");
    $pr1->setAge(22);
    $pr1->setSkill("Middle");

    echo "<br>" . $pr1->getName() . " " . $pr1->getAge() . " ". $pr1->getSkill();

    $t = new App\Other\Test();
    echo "<br> " . $t->getTest();

?>