<?php
    include_once 'Person.php';
    include_once 'Student.php';
    include_once 'Teacher.php';

    // -----------------
    $people[] = new Student('Petr', 'Petrov');
    $people[] = new Teacher('Andrey', 'Andreev');

    // -----------------
    foreach ($people as $person) {
        if ($person instanceof Person) {
            echo $person->getHello() . PHP_EOL;
        }
    }


