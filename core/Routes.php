<?php declare(strict_types=1);

Flight::route('/', array(new \App\Controllers\Home, 'index'));
Flight::route('/login', array(new \App\Controllers\Login, 'index'));