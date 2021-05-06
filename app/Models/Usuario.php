<?php declare(strict_types=1);

namespace App\Models;
use \Core\Model as Model;

class Usuario extends Model {

	public function getAll(){
		$usuarios = $this->db->query('SELECT * FROM usuario');

		return $usuarios;
	}
}
