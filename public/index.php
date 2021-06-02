<?php declare(strict_types=1);
session_start();

if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');
}

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'])) {
        header(
            'Access-Control-Allow-Methods: GET, POST, PUT, DELETE, PATCH, OPTIONS'
        );
    }
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])) {
        header(
            "Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}"
        );
    }
    exit(0);
}

/*
* CSRF TOKEN
*/
if (empty($_SESSION["token"])) {
	$_SESSION["token"] = bin2hex(random_bytes(32));
}

if (empty($_SESSION["token-expire"])) {
	$_SESSION["token-expire"] = time() + 3600;
}

require_once dirname(__DIR__) . '/core/Bootstrap.php';