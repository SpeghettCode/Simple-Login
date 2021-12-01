<?php

class Dbh {
    
    protected function connect() {
        try {
            $serverName = 'localhost';
            $username = 'root';
            $password = '';
            $dbName = 'simpleloginform';
            $charset = 'utf8mb4';
        
            $dsn = 'mysql:host=' . $serverName . ';dbname=' . $dbName . ';charset=' . $charset;
            $dbh = new PDO($dsn, $username, $password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $dbh;
            
        } catch (PDOException $e) {
            echo 'Error!: ' . $e->getMessage();
            die();
        }
    }
}
