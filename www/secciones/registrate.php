<script type="text/javascript" src="../js/registroPersona.js"></script>







<script type="text/javascript" src="../js/registroEmpresa.js"></script>







<script type="text/javascript" src="../js/validarRegistro.js"></script>











<?php if (!isset($_POST['registrate']) && !isset($_SESSION['sistema_usuario'])){  // SI NO SE ENVIO EL FORMULARIO DE REGISTRARSE, SE MUESTRA EL FORMULARIO.



			// esta mas abajo....





 }else{   //SINO SE VALIDA EL FORMULARIO Y SE DA DE ALTA EL USUARIO NUEVO.



				 if(isset($_POST['registrate'])){

					 

					 $nombre_usuario = $_POST['nombre_usuario'];

		

					 $nombre_usuario = trim($nombre_usuario);

					 

					 // REALIZO LA CONSULTA PARA SABER SI ESE NOMBRE DE USUARIO YA EXISTE.

					 

					 $strQuery = "SELECT * FROM `usuario` WHERE `nombre_usuario` LIKE '".$nombre_usuario."'";

					 

					 mysqli_query($conexion,$strQuery);

					 

					 if (mysqli_affected_rows($conexion) > 0 ){ // EXISTE EL USUARIO EN LA BASE DE DATOS.   ?>

						<div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">

		

								<div class="alert alert-danger text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">

		

									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

		

									El nombre de usuario: <strong style="text-decoration: underline;"><?php echo $nombre_usuario;?></strong>, ya existe, intente nuevamente con uno distinto.

		

								</div>

		

							</div>				 

					 

		<?PHP		 } else {                 // NO EXISTE EL USUARIO EN LA BASE DE DATOS...SE PUEDE DAR DE ALTA EL USER...

					 

					 

						 $nombre = $_POST['nombre'];

			

						 $nombre = trim($nombre);			 

			

						 $apellido = $_POST['apellido'];

			

						 $apellido = trim($apellido);

			

						 $mail = $_POST['mail'];

			

						 $mail = trim($mail);

			

						 $direccion = $_POST['direccion'];

			

						 $direccion = trim($direccion);

			

						 $telefono = $_POST['telefono'];

			

						 $telefono = trim($telefono);

			

						 $dni = $_POST['dni'];	

			

						 if(!is_null($dni)){

			

							$dni = trim($dni);

			

							$cuit = 0;

			

						 } else {

			

							$dni = 0;

			

							$cuit = $_POST['cuil'];

			

							$cuit = trim($cuit); 

			

						 }

			

						 $password = $_POST['password'];

			

						 $password = trim($password);

			

			

						 // VALIDACIONES DE IMAGEN

			

			

							 $image = $_FILES['imagen_usuario'];				

			

									

							 function isAllowedExtension($imageName) {

			

								$allowedExtensions = array("png", "jpg", "jpeg", "bmp", "gif", "tiff");

			

								$tmp = explode(".", $imageName);

			

								return in_array(end($tmp), $allowedExtensions);

			

							 }

			

			

							 if($image['error'] == UPLOAD_ERR_OK){

			

								if(isAllowedExtension($image['name']))  {

			

									if( $image['size'] > 0)	{					

			

										$tmpName  = $image['tmp_name'];

			

										$tmp2 = explode("/", $image['type']);

			

										$fileType = end($tmp2);

			

										

			

										$fp      = fopen($tmpName, 'r');

			

										$content = fread($fp, filesize($tmpName));

			

										$content = addslashes($content);

			

										fclose($fp);

			

									}else{

			

										  $errores[] = 'Imagen vacía o acceso inv&aacute;lido!!!';}

			

								}else{

			

									  $errores[] = 'S&oacute;lo se permiten im&aacute;genes con extensi&oacute;n png, jpg, jpeg, bmp, gif o tiff.';}        	     

			

							  }else{

			

									$errores[] = 'Debe adjuntar una imagen.';}

			

			

						 // END VALIDACIONES DE IMAGEN

			

			

						if(isset($content)){

			

						 $strQuery = "INSERT INTO `u541503574_couch`.`usuario` (`id_usuario`, `nombre_usuario` , `pass_usuario` , `rol_usuario` , `nombre` , `apellido` , `telefono` , `mail`, `direccion`, `cuit`, `dni` , `foto_usuario` , `extension_imagen`) VALUES (NULL,'".$nombre_usuario."','".$password."', 'Registrado' ,'".$nombre."','".$apellido."','".$telefono."','".$mail."','".$direccion."','".$cuit."','".$dni."' , '".$content."' , '".$fileType."')";

			

						}else{

			

							$strQuery = "INSERT INTO `u541503574_couch`.`usuario` (`id_usuario`, `nombre_usuario` , `pass_usuario` , `rol_usuario` , `nombre` , `apellido` , `telefono` , `mail`, `direccion`, `cuit`, `dni`) VALUES (NULL,'".$nombre_usuario."','".$password."', 'Registrado' ,'".$nombre."','".$apellido."','".$telefono."','".$mail."','".$direccion."','".$cuit."','".$dni."')";

			

						}

			

				

			

						 $_SESSION['consultaa2'] = $strQuery;

			

				

			

						 mysqli_query($conexion, $strQuery);

			

				

			

						 if (mysqli_affected_rows($conexion) > 0) {    //SE REGISTRO CON EXITO

			

				

			

						 ?>   

			

				

			

							<div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">

			

									<div class="alert alert-success text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large;margin-top: 17%">

			

										<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

			

										<strong style="text-decoration: underline;">Usted se ha registrado correctamente en el sistema</strong>.

			

									</div>

			

								</div>	

			

							<?php

			

				

			

							// INICIAMOS LA SESION DEL USUARIO DADO DE ALTA.

			

								require('../lib/claseAutenticadora.class.php');  

			

				

			

								$userAuthentication = new UserAuthentication();

			

				

			

								if($userAuthentication->doLogin($nombre_usuario,$password)) {					

			

				

			

									header( "refresh:1.0; url=../index.php");

			

				

			

								}	header( "refresh:1.0; url=../NOLOG.php");			

			

				

		

					   }else {         // HUBO ERRORES EN EL REGISTRO DE USUARIO

		

			?>

		

						<div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">

		

								<div class="alert alert-danger text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large;margin-top: 17%">

		

									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

		

									<strong style="text-decoration: underline;">Hubo un problema, registrese nuevamente.</strong>.

		

								</div>

		

							</div>	

		

			

		

			<?php		 }

		

					 }

		

				 }else{  //YA ESTA LOGUEADO...LO REDIRECCIONAMOS AL INICIO

		

					 header( "location: ../index.php");

		

				 }



	



		  }  //END DEL ELSE 





?>









<?php if (!isset($_SESSION['sistema_usuario'])){  // SI NO existe LA SESION DE USUARIO.?>



            <!--  FORMULARIO DE ALTA DE USUARIO    -->

            

            <section>

                <form name="formularioregistro" action="./index.php?seccion=registrate" method="post" role="form" onsubmit="return validarRegistro(formularioregistro)" enctype="multipart/form-data">

                    <div class="col-lg-4 col-md-6 col-xs-10 col-md-offset-3 col-lg-offset-4 col-xs-offset-1 " style="margin-bottom: 210px;">

                        <div class="panel panel-success">

                            <div class="panel-heading">

                                <h2 class="panel-title text-center">Datos personales</h2>

                            </div>

            

                            <div class="panel-body">                

                                <div class="form-group">                

                                   <div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">                

                                    <center>                

                                        <div class="btn-group" data-toggle="buttons">                

                                            <label class="btn btn-primary active" onClick="registroPersona(formularioregistro)" title="Persona">                

                                                <input type="radio" name="tipousuario" value="Persona" checked> Persona                

                                            </label>                

                                            <label class="btn btn-primary" onClick="registroEmpresa(formularioregistro)" title="Empresa">                

                                                <input type="radio" name="tipousuario" value="Empresa"  autocomplete="off"> Empresa                

                                            </label>                

                                        </div>                

                                    </center>                

                                  </div>                

                                </div>

                                </br></br>

                                <div class="form-group">

                                    <span class="label label-custom-two pull-left">Nombre</span>

                                    <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>

                                </div>

                                <div class="form-group">

                                    <span class="label label-custom-two pull-left">Apellido</span>

                                    <input type="text" class="form-control" placeholder="Apellido" name="apellido" required>

                                </div>

                                <div class="form-group">

                                    <span class="label label-custom-two pull-left">Documento</span>

                                    <input type="number" class="form-control" placeholder="Ingrese el DNI sin puntos '.'" min="0" max="99999999" name="dni" required>

                                </div>

                                <div class="form-group">

                                    <span class="label label-custom-two pull-left">CUIT</span>

                                    <input type="number" class="form-control" placeholder="Ingrese el CUIT sin guiones '-'" min="0" max="99999999999" name="cuil" disabled required>

                                </div>

            

                                <div class="form-group">

                                    <span class="label label-custom-two pull-left">Mail</span>

                                    <input type="email" class="form-control" placeholder="ejemplo@hotmail.com" name="mail" required>

                                </div>

                                <div class="form-group">

                                    <span class="label label-custom-two pull-left">Direcci&oacuten</span>

                                    <input type="text" class="form-control" placeholder="Minimo 5 caracteres" name="direccion" required>

                                </div>

                                <div class="form-group">

                                    <span class="label label-custom-two pull-left">Tel&eacutefono</span>

                                    <input type="number" class="form-control" placeholder="Minimo 5 caracteres" min="0" max="99999999999999999999" name="telefono" required> 

                                </div>   

                            </div>    

                        </div> 

            

                       <!-- FIN DATOS PERSONALES -->    

            

                       <!-- DATOS DEL USUARIO -->

            

                            <div class="panel panel-success">

                                <div class="panel-heading">

                                    <h2 class="panel-title text-center">Datos de usuario</h2>

                                </div>

                                <div class="panel-body"> 

                                        <div class="form-group">

                                            <span class="label label-custom-two pull-left">Nombre de usuario</span>

                                            <input type="text" class="form-control usuario" placeholder="Nombre de usuario" name="nombre_usuario" maxlength="20" required>

                                        </div>

                                        <div class="form-group">

                                            <span class="label label-custom-two pull-left">Contraseña</span>

                                            <input type="password" class="form-control usuario" placeholder="Contraseña" name="password" maxlength="16" required>

                                        </div>                             

            

                                        <div class="form-group">

                                            <span class="label label-custom-two pull-left">Seleccionar imagen</span>

                                        </div>

                                        <div class="form-group">

                                            <input type="file" class="form-control" name="imagen_usuario" accept="image/*">

                                            <small class="text-muted">Solo formato .png .jpg .jpeg .bmp .gif .tiff</small>

                                        </div>  

                                </div>

            

                       <!-- FIN DATOS DEL USUARIO -->    

            

                                   <div class="panel-footer">

                                       <center>

                                           <div class="form-group">	

                                                <button type="submit" class="btn btn-lg btn-custom-two" name="registrate" title="Registrarse">Registrarse</button>  

                                                <button type="reset" class="btn btn-lg btn-custom-two" title="Limpiar">Limpiar</button>       

                                                <button class="btn btn-lg btn-custom-two" title="Volver" onClick="javascript: history.back()">Volver</button>

                                           </div>

                                       </center>

                                   </div>

                            </div>

                        </div>

                    </form>

                </section>

            

            <!--  END FORMULARIO DE ALTA DE USUARIO    -->

            

            

 <?php } ?>