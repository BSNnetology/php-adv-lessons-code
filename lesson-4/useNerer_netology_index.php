<?php
exit;
// --------------------------- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// Код из листинга - такой лучше НИГДЕ и НИКОГДА не использовать!!!
// ---------------------------

// -- Приемр строки соединения с SQLite 
$pdo = new PDO("sqlite:my/database/path/database.db");

$sql = 'INSERT INTO users(login, password) VALUES(:login, :password)';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':login', 'new_login');
$stmt->bindValue(':password', 'new_password');
$stmt->execute();

$insertedId = $pdo->lastInsertId();

echo "\$insertedId = $insertedId";

// -- Приемр строки соединения с MySQL
$dbh = new PDO('mysql:host=localhost;dbname=test', '$user', '$pass');

$sth = $dbh->query('SELECT * FROM countries');
$rows = $stm->fetchAll();

print_r($rows);

