	<?php

		if(isset($_POST['Administrador']) || isset($_POST['Premium']) || isset($_POST['Registrado'])){

			$id = $_SESSION['sistema_usuario']['id_usuario'];

			if(isset($_POST['Administrador'])){

				$strQuery = "UPDATE `usuario` set `rol_usuario` = 'Administrador' WHERE `id_usuario` ='".$id."'";

				echo $strQuery;

				mysqli_query($conexion,$strQuery);

			}

			if(isset($_POST['Premium'])){

				$strQuery = "UPDATE `usuario` set `rol_usuario` = 'Premium' WHERE `id_usuario` ='".$id."'";

				mysqli_query($conexion,$strQuery);

			}

			if(isset($_POST['Registrado'])){

				$strQuery = "UPDATE `usuario` set `rol_usuario` = 'Registrado' WHERE `id_usuario` ='".$id."'";

				mysqli_query($conexion,$strQuery);

			}

			// INICIAMOS LA SESION DEL USUARIO DADO DE ALTA.



				require_once('../lib/claseAutenticadora.class.php');  



				$userAuthentication = new UserAuthentication();

				

				$nombre_usuario = $_SESSION['sistema_usuario']['nombre_usuario'];

				$password = $_SESSION['sistema_usuario']['pass_usuario'];

				

				if($userAuthentication->doLogin($nombre_usuario,$password)) {					



					header( "refresh:0.5; url=../cambiarUsuario.php");



          		}	

			

		}

	

	?>

    

    

    <section>	

		 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-lg-offset-3">

		 	<form action="" method="post">

            	<div class="form-group">

                	<input type="submit" class="form-control" name="Administrador" value="Administrador" />

                </div>

                <div class="form-group">

                	<input type="submit" class="form-control" name="Premium" value="Premium" />

                </div>

                <div class="form-group">

                	<input type="submit" class="form-control" name="Registrado" value="Registrado" />

                </div>            

            </form>       				

		</div>

	</section>