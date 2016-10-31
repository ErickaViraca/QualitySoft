<?php
	//recibimos datos de usuario
	$usuario = $_POST["usuario"];
	$password = $_POST["password"];

	//include
	require_once("conexion.php");

	//proceso de ingresar datos
	//validar que el usuario [user] no exista
	$validacion= mysql_query("select user from regestudiante where user like '".$usuario."'" );
	$user = mysql_fetch_row($validacion); //el 1er dato seria [0]

	if ($user[0]==$usuario){ //usuario BD=usuarioFormulario
		//el usuario existe en la base de datos
			?>
			<script type="text/javascript">
				alert("el usuario ya esta registrado, intente con otro nombre");
				window.location="../formularios/formularioEstudiante.html";
			</script>
			<?php

	}else{
		//registro Estudiante del usuario = el usuario no existe en BD
		$registroEstudiante = mysql_query("INSERT INTO regestudiante (idestudiante,user,codsis) VALUES (NULL,'$usuario','$password')");//true = si se registro, false=en caso contrario
		if($registroEstudiante){
			?>
			<script type="text/javascript">
				//alert("se ha registrado al usuario");
				window.location="../estudiante.html";
			</script>
			<?php
			
		}else{
			?>
			<script type="text/javascript">
				alert("No se ha registrado al usuario, error!!");
			</script>
			<?php
		}
	}

?>