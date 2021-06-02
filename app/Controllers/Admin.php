<?php declare(strict_types=1);

namespace App\Controllers;
use \Core\Controller as Controller;

class Admin extends Controller {
	
	public function index(){
		echo $this->plantilla->render('admin/admin');
	}
}