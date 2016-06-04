<?php
	
	require("../db/conectar_db.php");
	
	$id = $_GET['id'];
	$query = mysqli_query($conexion,"SELECT foto_usuario, extension_imagen FROM usuario
						 WHERE id_usuario='".$id."'");
	
	$foto = mysqli_fetch_array($query);

	$mime = "image/".$foto['extension_imagen'];
	header("Content-Type: ".$mime);
	echo $foto['foto_usuario'];

	require("../db/desconectar_db.php");	
	
?>	

		
