<?php

try {
    
    $pdo = new PDO("mysql:host=108.179.253.189; dbname=blogna48_cadeMinhaCasa", "blogna48_cmcNew", "C4d3m1nh@", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

} catch (PDOException $e) {
    
    echo "Erro: " . $e->getMessage();
    
}