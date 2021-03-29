<?php declare(strict_types=1);

namespace App\Models;
use \Core\Model as Model;

class Usuario extends Model {
	
	public function getAll(){
		$usuarios = self::db->select('usuarios', [
			'id','nombre','apellido_paterno','apellido_materno','email','fecha_creacion'
		]);
		
		return $usuarios;
	}
}