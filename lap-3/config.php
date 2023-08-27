<?php

$dns = 'mysql:host=localhost;dbname=temp-3';
$username = 'root';
$pass = '';
$option = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4'];

try {
    $db = new PDO($dns, $username, $pass, $option);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $EXCEPTION) {
    echo $EXCEPTION->getMessage();
    exit();
}

