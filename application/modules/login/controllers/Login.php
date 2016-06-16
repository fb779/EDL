<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//header ('Content-type: text/html; charset=utf-8');

class Login extends MX_Controller {
	
	var $datos;

	public function __construct() {
		parent::__construct();
		$this->datos['header'] = array(
			'static' => BASE_STATICS,
			'title' => TITULO_ENCUESTA
		);
		//$this->datos['footer'] = array();
	}
	
	public function index()
	{
		// $this->datos['menu'] = array(
		// 	'navigate' => array(	
		// 		array('modulo' => 'Directorio1', 'direc' => 'login'),
		// 		array('modulo' => 'Usuarios', 'direc' => 'home'),
		// 	),	
		// );
		
		$this->datos['template'] = 'form_login';
		$this->datos['dt'] = array(
			'url_login' => BASE_URL . 'login',
			'parrafo' => 'Parrafo de verificacion para la carga de contenido de la pagina..... ',
		);

		$this->parser->parse('loadTemplates', $this->datos);
	}

	
}
