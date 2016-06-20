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
			'form_identificar' => form_open('login/identificar'),
			'calendario_g' => $this->calendar->generate(),
			'parrafo' => 'Parrafo de verificacion para la carga de contenido de la pagina..... ',
		);

		$this->parser->parse('loadTemplates', $this->datos);
	}
	
	function identificar () {
		//echo "estamos identificandonos";
		
		$datos['usuario'] = $this->input->post('name', TRUE);
		$datos['clave'] = $this->input->post('password', TRUE);
		
		$this->datos['template'] = 'identificar';
		$this->datos['dt'] = array(
				'usuario' => $this->input->post('name', TRUE),
				'clave' => $this->input->post('password', TRUE),
				'url_login' => BASE_URL . 'login',
				'parrafo' => 'Parrafo de verificacion para la carga de contenido de la pagina..... ',
		);
		
		$this->parser->parse('loadTemplates', $this->datos);
	}

	
}
