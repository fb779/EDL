<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//header ('Content-type: text/html; charset=utf-8');

class Home extends MX_Controller {
	
	var $datos;
	var $attrNavbar = array(
		"data-toggle" => "tab",
	);
	public function __construct() {
		parent::__construct();
		// $this->datos['staticos'] = BASE_STATICS;
		// $this->datos['titulo'] = TITULO_ENCUESTA;
		$this->datos['header'] = array(
			'static' => BASE_STATICS,
			'title' => TITULO_ENCUESTA
		);
		
		$this->datos['menu'] = array(
			'navigate' => array(	
				array('link' => anchor('#caratula-unica', 'Caratula Unica', $this->attrNavbar), 'active' => ''),
				array('link' => anchor('#modulo-1', 'Modulo 1', $this->attrNavbar), 'active' => 'active'),
				//array('link' => anchor('#messages', 'Messages', $this->attrNavbar), 'active' => ''),
				//array('link' => 'Usuarios', 'direc' => 'home'),
			),	
		);
		
		$this->datos['footer'] = array('static' => BASE_STATICS,);
	}
	
	public function index() {
		$this->datos['template'] =  'prueba';
		$this->datos['dt'] = array(
			'url_login' => BASE_URL . 'login',
			'parrafo' => 'Parrafo de verificacion para la carga de contenido de la pagina ',
		);

		$this->parser->parse('loadTemplates', $this->datos);
	}
	
	public function load_div() {
		$this->load->view('div');
	}
}
