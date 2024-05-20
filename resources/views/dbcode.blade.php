<?php

$host = 'localhost';
$dbname = 'glimpz';
$username ='root';
$password ='';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "koneksi sukses!";
} catch(PDOException $e) {
    echo "koneksi gagal: " . $e->getMessage();
}

?>