<?php

namespace MVC\LIB\DATABASE;

class PDODatabaseHandler extends DatabaseHandler
{
    private static $_instance = null;
    private $pdo;

    private function __construct()
    {
        // Initialize PDO here
        try {
            $this->pdo = new \PDO(
                'mysql:host=localhost;dbname=storedb',
                'root',
                '54464248Hajer@'
            );

            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->pdo->exec("SET NAMES utf8");
        } catch (\PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    protected static function init()
    {
        // Not needed anymore since constructor initializes PDO
    }

    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function prepare($sql)
    {
        return $this->pdo->prepare($sql);
    }

    public function query($sql)
    {
        return $this->pdo->query($sql);
    }

    public function lastInsertId()
    {
        return $this->pdo->lastInsertId();
    }
}