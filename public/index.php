<?php declare(strict_types=1);
session_start();

/*
* CSRF TOKEN
*/
$_SESSION['token'] = bin2hex(random_bytes(32));
$_SESSION['token-expire'] = time() + 3600;

require_once dirname(__DIR__) . '/core/Bootstrap.php';