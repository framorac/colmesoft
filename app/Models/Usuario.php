<?php declare(strict_types=1);

namespace App\Models;
use \Core\Model as Model;

class Usuario extends Model {
	public function getAll(){
		$sql = "SELECT * FROM usuario";
		$stm = $this->db->prepare($sql);
		$stm->execute();
		$usuarios = $stm->fetchAll();

		return $usuarios;
	}

	public function crear(){
		$sql = "INSERT INTO usuario (ID_ROL,RUN,NOMBRE,PRIMER_APELLIDO,SEGUNDO_APELLIDO,EMAIL,PASSWORD,ESTADO) 
				VALUES (?,?,?,?,?,?,?,?)";
		$stm = $this->db->prepare($sql);

		$rol = 1;
		$run = "1-9";
		$nombre = "John";
		$pApellido = "Doe";
		$sApellido = "Doe";
		$email = "doe@doe.com";
		$password = password_hash("test", PASSWORD_DEFAULT);
		$estado = "ACTIVO";

		$stm->bindParam(1, $rol);
		$stm->bindParam(2, $run);
		$stm->bindParam(3, $nombre);
		$stm->bindParam(4, $pApellido);
		$stm->bindParam(5, $sApellido);
		$stm->bindParam(6, $email);
		$stm->bindParam(7, $password);
		$stm->bindParam(8, $estado);

		$inserted = $stm->execute();

		return $inserted;
	}

	private function validarUsuario($email, $password){
		$sql = "SELECT email,password FROM usuario WHERE email=? AND password=?";
		$stm = $this->db->prepare($sql);
	}
}