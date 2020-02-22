<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="content-type" content="text/html"; charset="UTF-8" />
		<title>Trabajo PHP</title>
	</head>
	<body>
		<?php foreach($consulta as $datos): ?>
		<h1>Modificar Información Estudiante</h1>
		<br>

		<form name="form1" method="post" action="index.php?accionEstudiante=guardarCambiosEstudiantes">
			<p>Numero: <input type="text" name="txtnumero" readonly value="<?php echo $_REQUEST['numero']; ?>"></p>

			<p>Tipo Documento: <input type="text" name="txttipodoc" value="<?php echo $datos['tipodoc'] ?>"></p>

			<p>Nombre: <input type="text" name="txtnombre" value="<?php echo $datos['nombre'] ?>"></p>

			<p>Fecha de Nacimiento: <input type="text" name="txtf_nacimiento" value="<?php echo $datos['f_nacimiento'] ?>"></p>

			<p><input type="submit" name="btnguardarcambios" value="Guardar Cambios"></p>
		</form>
	<?php endforeach; ?>
	</body>
</html>