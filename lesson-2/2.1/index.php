<?php
    include_once 'Person.php';
    include_once 'Student.php';
    include_once 'Teacher.php';

    // -----------------
    $people[] = new Person('Petr', 'Petrov');
    $people[] = new Student('Ivan', 'Ivanov');
    $people[] = new Teacher('Andrey', 'Andreev');

    // -----------------
    foreach ($people as $person) {
        if ($person instanceof Person) {
            echo $person->getHello() . PHP_EOL;
        }
    }


