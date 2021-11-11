<?php

try {
    $serverName = 'localhost';
    $username = 'root';
    $password = '';
    $dbName = 'simpleloginform';
    $charset = 'utf8mb4';

    $dsn = 'mysql:host=' . $serverName . ';dbname=' . $dbName . ';charset=' . $charset;
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Database connection failed: ' . $e->getMessage();
}