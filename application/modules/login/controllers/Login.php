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
	}
	
	public function index()
	{
		

		$this->datos['menu'] = array();



		// $datos['dt'] = array(
			
		// 	'navigate' => array(	
		// 		array('modulo' => 'Directorio1', 'direc' => 'empresas'),
		// 		array('modulo' => 'Usuarios', 'direc' => 'home'),
		// 	),
		// );
		
		$this->datos['page'] = 'form_login';
		$this->datos['dt_page'] = array(
			'url_login' => BASE_URL . 'login',
			'parrafo' => 'Parrafo de verificacion para la carga de contenido de la pagina..... ',
		);

		$this->parser->parse('loadTemplates', $this->datos);
	}

	
}
