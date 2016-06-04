<?php	

		$username = $_POST['nombre_usuario'];
		$password = $_POST['password_usuario']; 
		
		$username = trim($username);
		$password = trim($password);
				
      	require_once('../lib/claseAutenticadora.class.php');   
		$userAuthentication = new UserAuthentication();
		if($userAuthentication->doLogin($username,$password)) {	
			$entro = false;
			 ?>			
			<div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">
                    <div class="alert alert-success text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large;margin-top: 17%">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong style="text-decoration: underline;"><?php echo $username; ?></strong> usted se ha logeado con &eacute;xito.
                    </div>
                </div>
  <?php		header( "refresh:1.0; url=../index.php"); // REDIRECCIONAMOS AL INICIO
		}else{ 
			$strQuery = "SELECT `nombre_usuario` FROM `usuario` WHERE `nombre_usuario` LIKE '".$username."'";
			mysqli_query($conexion, $strQuery);
			
			if(mysqli_affected_rows($conexion) == 0) { // NO EXISTE EL USUARIO   ?>
                <div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">
                    <div class="alert alert-danger text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        El usuario <strong style="text-decoration: underline;"><?php echo $username; ?></strong> no existe.
                    </div>
                </div>			
	<?php	}else{ // LA CONTRASEñA ES INCORRECTA ?>
    			<div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">
                    <div class="alert alert-danger text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong style="text-decoration: underline;">La contrase&ntilde;a</strong> es incorrecta.
                    </div>
                </div>
					
<?php		}													
		}
?>	  		