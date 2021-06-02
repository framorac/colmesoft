<?php declare(strict_types=1);

Flight::route('GET /', array(new \App\Controllers\Home, 'index'));
Flight::route('GET /login', array(new \App\Controllers\Login, 'index'));
Flight::route('POST /login', array(new \App\Controllers\Login, 'login'));
Flight::route('GET /admin', array(new \App\Controllers\Admin, 'index'));