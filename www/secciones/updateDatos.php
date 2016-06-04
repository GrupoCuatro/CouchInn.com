<?php	

	//var_dump($_POST);
	 	

	$id_usuario = $_POST['id_usuario'];

	$mail = $_POST['mail'];
	 

	$direccion = $_POST['direccion'];

	$telefono = $_POST['telefono'];

	
	if ( $id_usuario == $_SESSION['sistema_usuario']['id_usuario']   ) {
			
		

   
 $_SESSION['sistema_usuario']['direccion'] = $direccion;   //actualizo la direccion en el $_SESSION['sistema']['direccion']
  
   
$_SESSION['sistema_usuario']['telefono'] = $telefono;   //actualizo el telefono en el $_SESSION['sistema']['telefono']

		$strQuery = "UPDATE `usuario` 

					 SET `mail` = '".$mail."' ,`direccion` ='".$direccion."',`telefono` ='".$telefono."'

					 WHERE `id_usuario` = '".$id_usuario."'";	

		

		

		//echo $strQuery;	

		$query = mysqli_query($conexion,$strQuery);  // REALIZAMOS LA ACTUALIZACION
	}
		

		if($query){       //LA ACTUALIZACION DE DATOS FUE EXITOSA   ?>

			<div class="vert-center" style="margin-top: 17%">      

                <div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">

                    <div class="alert alert-success text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">

                      <strong>Los datos </strong><?php $id_usuario ?>  han sido modificados   correctamente.

                    </div>

                </div>

            </div>		

			

<?php	}else{			  //SE PRODUJO UN ERROR EN EL CAMBIO DE PASSWORD ?>

			<div class="vert-center" style="margin-top: 17%">      

                <div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">

                    <div class="alert alert-danger text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">

                      <strong>Los datos</strong> no han podido ser modificados.

                    </div>

                </div>

            </div>				

<?php	}

		

	

	header( "refresh:5.5; url=../inicio.php"); 

?>