<?php declare(strict_types=1);

namespace Core;

class Controller {
	protected $plantilla;
	
	public function __construct(){
	$this->plantilla = new \League\Plates\Engine(dirname(__DIR__) . '/app/Views');
		$this->plantilla->setFileExtension('phtml');
	}
	
	public function render($plantilla, $parametros = []){
		return $this->plantilla($plantilla, $parametros);
	}
}