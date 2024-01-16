<?php

require_once __DIR__ . '/../vendor/autoload.php';

use ParcijalniIspit\src\database\Database;

try {
    $db = Database::getInstance();
    $conn = $db->getConnection();

    $tableName = "example_table"; 
    $data = $db->getAllData($tableName);

    print_r($data);

    $conn = null;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}