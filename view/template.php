<!DOCTYPE html>
<html>
	
	<head>
		<title>Intro</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
	</head>
	
	<body>

		<?php
		include 'view/navegacion.php';
		?>
		<section>
		<?php
			$mvc = new Sistema_controller();
			$mvc -> paginasController();
		?>
		</section>
	</body>

</html>
