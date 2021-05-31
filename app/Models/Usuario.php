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

	public function add(){
		$sql = "INSERT INTO usuario (ID_ROL,RUN,NOMBRE,PRIMER_APELLIDO,SEGUNDO_APELLIDO,EMAIL,PASSWORD,ESTADO) 
				VALUES (?,?,?,?,?,?,?,?)";
		$stmt = $this->db->prepare($sql);

		$rol = 1;
		$run = "1-9";
		$nombre = "John";
		$pApellido = "Doe";
		$sApellido = "Doe";
		$email = "doe@doe.com";
		$password = password_hash("test", PASSWORD_DEFAULT);
		$estado = "INACTIVO";

		$stmt->bindParam(1, $rol);
		$stmt->bindParam(2, $run);
		$stmt->bindParam(3, $nombre);
		$stmt->bindParam(4, $pApellido);
		$stmt->bindParam(5, $sApellido);
		$stmt->bindParam(6, $email);
		$stmt->bindParam(7, $password);
		$stmt->bindParam(8, $estado);

		$inserted = $stmt->execute();

		return $inserted;
	}
}