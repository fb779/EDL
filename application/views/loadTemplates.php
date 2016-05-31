<?php
	if (isset($header)){
		$this->parser->parse("templates/header.php", $header);
	}

	if (isset($menu)){
		$this->parser->parse("templates/navigation.php", $menu);
	}
	
	if (isset($template)){
		$this->parser->parse($template, $dt);
	} 

	$this->parser->parse("templates/footer.php", $footer);

	// $this->load->view("templates/header.php");
	// $this->load->view("templates/navigation.php");
	// $this->load->view($page, $dt);
	// $this->load->view("templates/footer.php");
