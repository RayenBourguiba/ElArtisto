<?php
$dsn = "mysql:host=localhost;dbname=projetweb";
try {
    $pdo = new PDO($dsn, 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>