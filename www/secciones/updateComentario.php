<?php
	session_start();
	date_default_timezone_set('America/Argentina/Buenos_Aires');
	require("../db/conectar_db.php");
	
	var_dump($_POST);
	$id_coment = $_POST['id_coment'];
	$comentUpdate = $_POST['comentario'];
	
	$fecha = date("Y-m-d H:i:s");
	$strQuery = "UPDATE `comentario` 
				 SET `comentario` = '".$comentUpdate."' ,
				 `fecha_coment` = '".$fecha."'   
				 WHERE `id_coment` = '".$id_coment."'";	
				 
	echo $strQuery;	
	mysqli_query($conexion,$strQuery);
	
	header( "refresh:1.5; url=../green2.php"); 

	require("../db/desconectar_db.php");

?>