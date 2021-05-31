<?php declare(strict_types=1);

Flight::set('flight.base_url', 'http://127.0.0.1:8888/');
/*
* DATABASE
*/
$host = $_ENV['DB_HOST'];
$port = $_ENV['DB_PORT'];
$database = $_ENV['DB_NAME'];
$charset = $_ENV['DB_CHARSET'];
$collate = $_ENV['DB_COLLATE'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASS'];
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_PERSISTENT => false,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES $charset COLLATE $collate"
];
$dsn = "mysql:host=$host;port=$port;dbname=$database;charset=$charset";
Flight::register('database', 'PDO', array($dsn, $user, $pass, $options));