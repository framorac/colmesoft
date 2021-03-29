<?php declare(strict_types=1);

$dsn = 'mysql:host='.$_ENV['DB_HOST'].';port='.$_ENV['DB_PORT'].';dbname='.$_ENV['DB_NAME'].';charset='.$_ENV['DB_CHARSET'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASS'];
Flight::set('flight.base_url', 'http://127.0.0.1:8888/');