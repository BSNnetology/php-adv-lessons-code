<?php
    // ===================================
    include_once 'Calculator.php';

    $calc = new Calculator;
    print_r($calc->getPower(9, 6) . PHP_EOL);

    // ===================================
    /* 
        Для установки необходимых компонентов версии 10,
    необходимо выполнить следующую команду:
    
    composer require phpunit/phpunit


        Для выполнение тестрования выполнить команду:

    vendor/bin/phpunit CalculatorTest.php

    
        Для установки более поздней версии, ПРЕДВАРИТЕЛЬНО(!) 
    выполнить команды:

    sudo apt-get update
    sudo apt install php-xml

    */

