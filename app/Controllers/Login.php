<?php declare(strict_types=1);

namespace App\Controllers;
use \Core\Controller as Controller;
use \App\Models\Usuario as Usuario;
use \Flight as Flight;

class Login extends Controller {
	
	public function index(){
		echo $this->plantilla->render('login/login');
	}

	public function login(){
		$request = Flight::request();
		$email = $request->data->email;
		$password = Flight::request()->data['password'];
		$csrf = Flight::request()->data['csrf'];

		\Flight::json(array("data" => ['email' => $email, 'password' => $password, 'csrf' => $csrf], 'body' => Flight::request()->getBody()));

		/*if (!empty($email) && !empty($password) && !empty($csrf)) {
			if (hash_equals($_SESSION["token"], $csrf)) {
				if (time() >= $_SESSION["token-expire"]) {
					\Flight::json(array("status" => "Token Expired"));
				}else {
					\Flight::json(array("status" => "OK"));
					unset($_SESSION["token"]);
					unset($_SESSION["token-expire"]);
				}
			}
		} else {
			\Flight::json(array("status" => "Datos NOK"));
		}*/
	}
}