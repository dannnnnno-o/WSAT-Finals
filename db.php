<?php
$host = 'localhost';
$dbname = 'wsat';
$username = 'root';
$pwd = '';

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $pwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("Connection failed: " . $e->getMessage());
}

?>