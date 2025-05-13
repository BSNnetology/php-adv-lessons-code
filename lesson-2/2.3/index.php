<?php
    include_once 'PersonInterface.php';
    include_once 'Student.php';
    include_once 'Teacher.php';

    // -----------------
    $people[] = new Student();
    $people[] = new Teacher();

    // -----------------
    foreach ($people as $person) {
        if ($person instanceof PersonInterface) {
            echo $person->getHello('Вася', 'Пупкин') . PHP_EOL;
        }
    }



