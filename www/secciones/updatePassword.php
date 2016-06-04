<?php	
	//var_dump($_POST);
	$id_usuario = $_POST['id_usuario'];
	$password_actual = $_POST['password_actual'];
	$password_nueva = $_POST['password_nueva'];
	$confirmar_password = $_POST['confirmar_password'];
	
	if ( $password_actual == $_SESSION['sistema_usuario']['pass_usuario']  &&  $password_nueva != $password_actual  && $password_nueva ==  $confirmar_password ) {
			
		$_SESSION['sistema_usuario']['pass_usuario'] = $password_nueva;   //actualizo la password en el $_SESSION['sistema']['pass_usuario']
		$strQuery = "UPDATE `usuario` 
					 SET `pass_usuario` = '".$password_nueva."' 
					 WHERE `id_usuario` = '".$id_usuario."'";	
		
		
		//echo $strQuery;	
		$query = mysqli_query($conexion,$strQuery);  // REALIZAMOS LA ACTUALIZACION
		
		if($query){       //LA ACTUALIZACION DE PASSWORD FUE EXITOSA   ?>
			<div class="vert-center" style="margin-top: 17%">      
                <div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">
                    <div class="alert alert-success text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">
                      <strong>La contrase&ntilde;a</strong> ha sido modificada correctamente.
                    </div>
                </div>
            </div>		
			
<?php	}else{			  //SE PRODUJO UN ERROR EN EL CAMBIO DE PASSWORD ?>
			<div class="vert-center" style="margin-top: 17%">      
                <div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">
                    <div class="alert alert-danger text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">
                      <strong>La contrase&ntilde;a</strong> no pudo ser modificada.
                    </div>
                </div>
            </div>				
<?php	}
		
	}else{			  //SE PRODUJO UN ERROR EN EL CAMBIO DE PASSWORD ?>
			<div class="vert-center" style="margin-top: 17%">      
                <div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">
                    <div class="alert alert-danger text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">
                      <strong>La contrase&ntilde;a</strong> no pudo ser modificada.
                    </div>
                </div>
            </div>				
<?php	}
	header( "refresh:5.5; url=../inicio.php"); 
?>