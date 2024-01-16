<?php

$config = require_once(__DIR__ . '/db_config.php');

define('DB_HOST', $config['host']);
define('DB_USERNAME', $config['username']);
define('DB_PASSWORD', $config['password']);
define('DB_NAME', $config['database']);