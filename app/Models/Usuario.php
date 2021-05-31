<?php declare(strict_types=1);

namespace App\Models;
use \Core\Model as Model;

class Usuario extends Model {

	public function getAll(){
		$database = \Flight::database();
		$usuarios = $database->query('SELECT * FROM rol WHERE id_rol=1');

		return $usuarios;
	}

	public function create(){
		$sql = "INSERT INTO usuario (ID_ROL,RUN,NOMBRE,PRIMER_APELLIDO,SEGUNDO_APELLIDO,EMAIL,PASSWORD) 
		VALUES (:id_rol,:run,:nombre,:primer_apellido,:segundo_apellido,:email,:password)";

		$stm = $this->$db->prepare($sql);
		$stm->bindValue(':id_rol', 1, PDO::PARAM_INT);
		$stm->bindValue(':run', '21623469-3', PDO::PARAM_STR);
		$stm->bindValue(':nombre', 'Francisco', PDO::PARAM_STR);
		$stm->bindValue(':primer_apellido', 'Mora', PDO::PARAM_STR);
		$stm->bindValue(':segundo_apellido', 'Collao', PDO::PARAM_STR);
		$stm->bindValue(':email', 'fmora@pandom.cl', PDO::PARAM_STR);
		$stm->bindValue(':password', password_hash('adminbd', PASSWORD_DEFAULT), PDO::PARAM_STR);

		$inserted = $stm->execute();

		if ($inserted) {
			echo 'Usuario Creado...';
		}

		return $inserted;
	}
}
