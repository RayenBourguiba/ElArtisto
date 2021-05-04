<?php
$dsn = "mysql:host=localhost;dbname=blogartisto";
try {
    $pdo = new PDO($dsn, 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

