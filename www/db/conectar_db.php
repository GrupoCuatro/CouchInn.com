<?php 
    //Server
	$conexion = mysqli_connect("mysql.hostinger.com.ar", "u541503574_grup4", "grupo04", "u541503574_couch");
    
    //Local	
	//$conexion = mysqli_connect("localhost", "root", "", "couchinn");
	
	if (!$conexion) {
		echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
		echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
		echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
		exit;
	}
?>