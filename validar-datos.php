<?php
	$nombre="Jo_ON";
	$password= "Mircha";

	if(isset($_GET["enviar_hdn"]))
	{
		if($nombre==$_GET["nombre_txt"] && $password == $_GET["password_txt"])
		{
			echo "El nombre introducido por GET es:".$_GET['nombre_txt']."<br />El password introducido por GET es: ".$_GET['password_txt']."<br />El sexo declarado es:".$_GET['sexo_rdo'];
		}
		else
		{
			header("Location: formulario.php?error=si");
		}
	}
	else if(isset($_POST["enviar_hdn"]))
	{
		if($nombre==$_POST["nombre_txt"] && $password == $_POST["password_txt"])
		{
			echo "El nombre introducido por POST es:".$_POST['nombre_txt']."<br />El password introducido por POST es: ".$_POST['password_txt']."<br />El sexo declarado es:".$_POST['sexo_rdo'];
		}
		else
		{
			header("Location: formulario.php?error=si");
		}
	}

?>