<?php
$dsn = 'mysql:host=localhost;dbname=objetarts';
$user = 'root';
$password = '';

try {
    $dbh = new PDO('mysql:host=localhost;dbname= objetarts', 'root', '');
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

?>