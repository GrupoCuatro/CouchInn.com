<?php
	session_start();
	
	require("../db/conectar_db.php");
	
	var_dump($_POST);
	$id_coment = $_POST['id_coment'];
		
	$strQuery = "DELETE FROM `comentario` 
				 WHERE `id_coment` = '".$id_coment."'";	
	
	mysqli_query($conexion,$strQuery);
	
	header( "refresh:5.5; url=../green2.php"); 

	require("../db/desconectar_db.php");

?>