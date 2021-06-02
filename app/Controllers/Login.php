<?php declare(strict_types=1);

namespace App\Controllers;
use \Core\Controller as Controller;
use \App\Models\Usuario as Usuario;

class Login extends Controller {
	
	public function index(){
		echo $this->plantilla->render('login/login');
	}

	public function login(){
		$email = \Flight::request()->data->email;
		$password = \Flight::request()->data->password;
		$csrf = \Flight::request()->data->csrf;

		if (!empty($email) && !empty($password) && !empty($csrf)) {
			if (hash_equals($_SESSION["token"], $csrf)) {
				if (time() >= $_SESSION["token-expire"]) {
					\Flight::json(array("status" => "Token Expired"));
				}else {
					unset($_SESSION["token"]);
					unset($_SESSION["token-expire"]);
					
					$usuario = new Usuario;
					if ($usuario->validarUsuario($email, $password)) {
						\Flight::json(array("status" => "Usuario OK"));
					}else {
						\Flight::json(array("status" => "Usuario NOK"));
					}
				}
			}
		} else {
			\Flight::json(array("status" => "Datos NOK"));
		}
	}
}