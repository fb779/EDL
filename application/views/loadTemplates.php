<!--!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{titulo}</title>

	<link rel="stylesheet" type="text/css" href="{staticos}css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{staticos}css/styles.css">
</head>

<body-->

<?php
	if (isset($header)){
		$this->parser->parse("templates/header.php", $header);
	} else {
		$this->parser->parse("templates/header.php", array());
	}

	if (isset($menu)){
		$this->parser->parse("templates/navigation.php", $menu);
	}

	if (isset($template)){
		$this->parser->parse($template, $dt);
	}

	if (isset($footer)){
		$this->parser->parse("templates/footer.php", $footer);
	} else {
		$this->parser->parse("templates/footer.php", array());
	}

	// $this->load->view("templates/header.php");
	// $this->load->view("templates/navigation.php");
	// $this->load->view($page, $dt);
	// $this->load->view("templates/footer.php");
?>
	<!--script src="{staticos}js/jquery-1.12.3.min.js" type="text/javascript"></script>
	<script src="{staticos}js/bootstrap.min.js" type="text/javascript"></script>
	<script src="{staticos}js/angular.min.js" type="text/javascript"></script>
	<script src="{staticos}js/ETES.js" type="text/javascript"></script>
</body>
</html-->
