<!DOCTYPE html>
<html lang="es" />
<head>
	<meta charset="UTF-8" />
	<title>Validación de Datos con PHP</title>
	<link rel="stylesheet" href="css/css.css" />
</head>
<body>

	<?php
		//Ocultamos el mensaje de error de variable $_GET no definida
		error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

		if($_GET["error"]=="si")
		{
			echo "<span style='color: #F00; font-size:2em;'>VERIFICA TUS DATOS</span>";
		}

	?>
	<hgroup><h1>Formulario de Datos GET</h1></hgroup>
	<fieldset>	
		<form id="valida_datos_get" name="valida_datos_get_frm" action="validar-datos.php" method="get" enctype="application/x-www-form-urlencoded">
			Introduce tu nombre:&nbsp;&nbsp;&nbsp;
			<input id="nombre-get" type="text" name="nombre_txt" />
			<br /><br />
			Introduce tu password:
			<input id="password-get" type="password" name="password_txt" />
			<br /><br />
			<input type="radio" name="sexo_rdo" value="M" />Masculino&nbsp;
			<input type="radio" name="sexo_rdo" value="F" />Femenino&nbsp;
			<br /><br />
			<input type="hidden" name="enviar_hdn" value="get" />
			<input type="button" id="enviar-get" name="enviar_btn" value="Enviar-GET">
		</form>
	</fieldset>

	<hgroup><h1>Formulario de Datos POST</h1></hgroup>
	<fieldset>	
		<form id="valida_datos_post" name="valida_datos_post_frm" action="validar-datos.php" method="post" enctype="application/x-www-form-urlencoded">
			Introduce tu nombre:&nbsp;&nbsp;&nbsp;
			<input id="nombre-post" type="text" name="nombre_txt" />
			<br /><br />
			Introduce tu password:
			<input id="password-post" type="password" name="password_txt" />
			<br /><br />
			<input type="radio" name="sexo_rdo" value="M" />Masculino&nbsp;
			<input type="radio" name="sexo_rdo" value="F" />Femenino&nbsp;
			<br /><br />
			<input type="hidden" name="enviar_hdn" value="post" />
			<input type="button" id="enviar-post" name="enviar_btn" value="Enviar-POST">
		</form>
	</fieldset>

<script src="js/despachadorjs.js"></script>
</body>
</html>