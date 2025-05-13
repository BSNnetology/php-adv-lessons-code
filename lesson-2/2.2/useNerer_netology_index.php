<?php
// --------------------------- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// Код из листинга - такой лучше НИГДЕ и НИКОГДА не использовать!!!
// ---------------------------

$people[] = new Student('Petr', 'Petrov');
$people[] = new Teacher('Andrey', 'Andreev');

foreach ($people as $person) {
    if ($person instanceof Person) {
        echo $person->getHello();
    }
}


