<?php declare(strict_types=1);

/*
* COMPOSER
*/
require_once dirname(__DIR__) . '/vendor/autoload.php';

/*
* PHPDOTENV
*/
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

/*
* FLIGHT CONFIG
*/
require_once dirname(__DIR__) . '/core/Config.php';

/*
* ROUTES
*/
require_once dirname(__DIR__) . '/core/Routes.php';


/*
* FLIGHT INIT
*/
Flight::start();