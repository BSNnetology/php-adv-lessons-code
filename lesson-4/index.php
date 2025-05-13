<?php
    // ===================================
    if (!file_exists('./.password')) {
        echo "\nОтстутсвует файл парлоля соединения с базой MySql\n";
        exit;
    }

    $pass = file_get_contents('./.password');
    $pdo = new PDO('mysql:host=localhost;dbname=Netology', 'root', $pass);

    // --------------
    $qwr = $pdo->query('SELECT * FROM ptoducts where id = 5');
    $rows = $qwr->fetchAll(PDO::FETCH_ASSOC);

    if (count($rows)) {
        echo "\nВ таблице 'ptoducts' базы 'Netology' уже есть запись с id = 5\n";
    } else {
        InsertNewRow($pdo);
    }

    // --------------
    $qwr = $pdo->query('SELECT * FROM ptoducts');
    $rows = $qwr->fetchAll(PDO::FETCH_ASSOC);

    echo "\nСодержимое таблицы 'ptoducts' базы 'Netology':\n";
    print_r($rows);
    echo "\n";

    // =================================== 
    function InsertNewRow(PDO $pdo): void {
        $sql = 'INSERT INTO ptoducts(id, category, product) VALUES(:id, :category, :product)';

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', 5);
        $stmt->bindValue(':category', 'Электротоваты');
        $stmt->bindValue(':product', 'Электрощиток');
        
        $stmt->execute();
        $newId = $pdo->lastInsertId();   
        echo "\nВ таблицу 'ptoducts' базы 'Netology' добавлена запись с id = $newId\n";
    }