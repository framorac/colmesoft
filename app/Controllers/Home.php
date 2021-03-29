<?php declare(strict_types=1);

namespace App\Controllers;
use \Core\Controller as Controller;

class Home extends Controller {
	
	public function index(){
		echo $this->plantilla->render('home/home');
	}
}