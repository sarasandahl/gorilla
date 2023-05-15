<?php

require_once 'config.php';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
    $pdo = new PDO($dsn,$user,$password);
    if($pdo){
        // echo "Connected to $db successfully!";
    }
} catch (PDOException $e) {
    echo $dsn;
    echo $e->getMessage();
}