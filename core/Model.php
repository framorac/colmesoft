<?php declare(strict_types=1);

namespace Core;
use Medoo\Medoo;

class Model {
	protected $db;
	
	public function __construct(){
		$this->db = new Medoo([
			'database_type' => $_ENV['DB_TYPE'],
			'database_name' => $_ENV['DB_NAME'],
			'server' => $_ENV['DB_HOST'],
			'username' => $_ENV['DB_USER'],
			'password' => $_ENV['DB_PASS'],
			'charset' => $_ENV['DB_CHARSET'],
			'collation' => $_ENV['DB_COLLATE'],
			'port' => $_ENV['DB_PORT'],
			'option' => [
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
			]
		]);
	}
}