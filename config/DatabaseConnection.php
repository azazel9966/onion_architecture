<?php

class DatabaseConnection
{
    private static ?DatabaseConnection $instance = null;
    private PDO $pdo;

    private function __construct($dbHost, $dbName, $dbUser, $dbPassword)
    {
        $this->pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
    }

    public static function getInstance($dbHost, $dbName, $dbUser, $dbPassword): ?DatabaseConnection
    {
        if (self::$instance === null) {
            self::$instance = new self($dbHost, $dbName, $dbUser, $dbPassword);
        }

        return self::$instance;
    }

    public function getPDO(): PDO
    {
        return $this->pdo;
    }
}