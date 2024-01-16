<?php

namespace ParcijalniIspit\src\database;

use PDO;

class Database
{
        private static $instance;
        private $connection;

        private function __construct()
    {
        require_once(__DIR__ . '/../../config/config.php');

        $this->connection = new PDO(
            "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8",
            DB_USERNAME,
            DB_PASSWORD
        );
    }

        public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

        public function getConnection()
    {
        return $this->connection;
    }
}

