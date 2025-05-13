<?php
    require_once 'magic.php';
    require_once 'traits.php';
    // -----------------
    // system('clear'); // system('cls'); // windows

    // ===================================
    echo "\n===================== Magic Functions =====================\n";
    $person = new Person();

    $person->userName = 'Иванов Петр';
    echo 'Current userName value: ' . $person->userName . PHP_EOL;

    $person->changeName('userName', 'Иван', 'Никифор');
    echo 'Current userName value: ' . $person->userName . PHP_EOL;

    Person::sayHello('Петров', 'Иван');

    // ===================================
    echo "\n===================== Use Traits =====================\n";
    $user = new User("Иван");
    $user = new User("Джон");

    $serialized = $user->serialize();
    echo "\nОбъект в виде сериализованной строки:\n$serialized\n";
    
    echo "\nСодержимое сериализованной строки:\n";
    print_r($user->unserialize($serialized));

    echo "\nСписок использованных trait-ов:\n";
    print_r(get_declared_traits());
    echo "\n";