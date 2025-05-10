<?php
// --------------------------- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// Код из листинга - такой лучше НИГДЕ и НИКОГДА не использовать!!!
// ---------------------------

$people[] = new Student();
$people[] = new Teacher();

foreach ($people as $person) {
    if ($person instanceof PersonInterface) {
        echo ($person->getHello('SomeName', 'SomeSurname'));
        echo (PHP_EOL);
    }
}



