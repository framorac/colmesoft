<?php declare(strict_types=1);

Flight::route('GET /', array(new \App\Controllers\Home, 'index'));
Flight::route('GET /login', array(new \App\Controllers\Login, 'index'));
Flight::route('GET /create', array(new \App\Controllers\Login, 'create'));