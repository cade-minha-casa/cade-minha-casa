<?php

try {
    
    $pdo = new PDO("mysql:host=sql101.epizy.com; dbname=epiz_27738385_CADE_MINHA_CASA", "epiz_27738385", "Qf1VXZmW2YvjW", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

} catch (PDOException $e) {
    
    echo "Erro: " . $e->getMessage();
    
}