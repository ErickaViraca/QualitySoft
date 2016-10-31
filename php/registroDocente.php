<?php
	//recibimos datos de usuario
	$nombre = $_POST["nombre"];
	$apPaterno = $_POST["apellidoPaterno"];
	$apMaterno = $_POST["apellidoMaterno"];
	$password = $_POST["password"];

	//include
	require_once("conexion.php");

	//proceso de ingresar datos
	//validar que el usuario [user] no exista
	$validacion= mysql_query("select user from regdocente where user like '".$nombre."'" );
	$user = mysql_fetch_row($validacion); //el 1er dato seria [0]

	//datos nombre
	if ($user[0]==$nombre){ //usuario BD=usuarioFormulario
		//el usuario existe en la base de datos
		?>
			<script type="text/javascript">
				alert("el usuario ya esta registrado");
			</script>
			<?php

	}else{
		//registro Docente del usuario = el usuario no existe en BD
		$registroDocente = mysql_query("INSERT INTO regdocente (idDocente,user,codsis) VALUES (NULL,'$nombre','$password')");//true = si se registro, false=en caso contrario
		if($registroDocente){
			?>
			<script type="text/javascript">
				alert("se ha registrado al usuario");
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

	//datos apellido paterno
	if ($user[0]==$apPaterno){ //usuario BD=usuarioFormulario
		//el usuario existe en la base de datos
		?>
			<script type="text/javascript">
				alert("el usuario ya esta registrado");
			</script>
			<?php

	}else{
		//registro Docente del usuario = el usuario no existe en BD
		$registroDocente = mysql_query("INSERT INTO regdocente (idDocente,user,codsis) VALUES (NULL,'$apPaterno','$password')");//true = si se registro, false=en caso contrario
		if($registroDocente){
			?>
			<script type="text/javascript">
				alert("se ha registrado al usuario");
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
	//registro apellido Materno
	if ($user[0]==$apMaterno){ //usuario BD=usuarioFormulario
		//el usuario existe en la base de datos
		?>
			<script type="text/javascript">
				alert("el usuario ya esta registrado");
			</script>
			<?php

	}else{
		//registro Docente del usuario = el usuario no existe en BD
		$registroDocente = mysql_query("INSERT INTO regdocente (idDocente,user,codsis) VALUES (NULL,'$apMaterno','$password')");//true = si se registro, false=en caso contrario
		if($registroDocente){
			?>
			<script type="text/javascript">
				alert("se ha registrado al usuario");
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