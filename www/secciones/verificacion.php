<script type="text/javascript" src="../js/validarVerificarUsuario.js"></script>



<?php if ( !isset($_POST['verificacion']) && isset($_SESSION['sistema_usuario']) && $_SESSION['sistema_usuario']['rol_usuario']!="Administrador" && $_SESSION['sistema_usuario']['verificacion']=="0" ){  // SI NO SE ENVIO EL FORMULARIO DE VERIFICACION, SE MUESTRA EL FORMULARIO.?>



	<!-- INICIO FORMULARIO VERIFICACION -->  

    

	<section>

    

    	  <div class="col-lg-10 col-md-10 col-xs-10 col-md-offset-1 col-lg-offset-1 col-xs-offset-1 ">

            <div class="alert alert-info text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: large">

                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

             	Estimado: <strong style="text-decoration: underline;"><?php echo $_SESSION['sistema_usuario']['nombre_usuario']; ?></strong>, verificando su cuenta, usted puede tener una mayor reputaci&oacute;n en cuanto a su.</br>

                B&aacute;sicamente sirven para demostrar que dicha cuenta est&aacute; leg&iacute;timamente en poder de la persona correcta.</br>

                Por lo tanto, si eres una persona de inter&eacute;s p&uacute;blico o con un perfil lo suficientemente alto como para que la gente te busque, es posible que consigas ser un usuario de <em>Couchinn verificado</em>.</br>

            </div>

		 </div>

    

    

        <form name="formularioVerificarUsuario" action="./index.php?seccion=verificacion" method="post" role="form" onsubmit="return validarVerificarUsuario(formularioVerificarUsuario)" enctype="multipart/form-data">



            <div class="col-lg-4 col-md-6 col-xs-10 col-md-offset-3 col-lg-offset-4 col-xs-offset-1 " style="margin-bottom: 10%;">

            <div class="panel panel-success">

              <div class="panel-heading">

                <h2 class="panel-title text-center">Verificaci&oacute;n de Usuario</h2>

              </div>



              <div class="panel-body">

                    <input type="hidden" name="id_usuario" value="<?php echo $id; ?>" />                    



                     <div class="form-group">

						<span class="label label-custom-two pull-left">1ra y 2da p&aacutegina del Documento - Formato: .jpg .png .gif. .pdf</span>    

	                </div>

   

					<div class="form-group">     

                        <input type="file" class="form-control" accept="image/gif, image/jpeg, image/png, application/pdf" name="imagenDNI" id="imagenDNI" required/>

					</div> 

                    

                    

                    

                    <div class="form-group">

						<span class="label label-custom-two pull-left">Servicio - Agua, Gas o Electricidad - Formato: .jpg .png .gif. .pdf</span>

                    </div>

					<div class="form-group">    

                    	<input type="file" class="form-control" accept="image/gif, image/jpeg, image/png, application/pdf" name="imagenServicio" id="imagenServicio" required/>

                    </div>  

              </div>     

              

				<div class="panel-footer">

                   <center>

                   	   <div class="form-group">	    

							<button type="submit" class="btn btn-lg btn-custom-two" name="verificacion"  title="Verificar">Verificar</button >

                            <button type="reset" class="btn btn-lg btn-custom-two" title="Limpiar">Limpiar</button>

                            <button class="btn btn-lg btn-custom-two" title="Volver" onClick="javascript: history.back()">Volver</button>

                       </div>

                    </center> 

                </div>



                



             </div>



		</div>



       </form>



     </section>



	<!--FIN FORMULARIO VERIFICACION -->



<?php }else{   //SE MANDO EL POST DE VERIFICACION

			

			if(isset($_POST['verificacion'])) {              // si le pasa el formulario...

				$id_usuario = $_POST['id_usuario'];

		

					  

				$strQuery = "UPDATE `usuario` SET `verificacion` = '1' WHERE `id_usuario` = '".$id_usuario."'";	

				$_SESSION['sistema_usuario']['verificacion'] = "1";

		

				mysqli_query($conexion,$strQuery);

				

		

				if(mysqli_affected_rows($conexion) > 0){       //LA VERIFICACION FUE EXITOSA  ?>

		

					<div class="vert-center" style="margin-top: 17%">      

		

						<div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">

		

							<div class="alert alert-success text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">

		

							  <strong>Felicidades: <?php echo $_SESSION['sistema_usuario']['nombre_usuario'] ?></strong> usted ahora es un usuario verificado.

		

							</div>

		

						</div>

		

				</div>	

                

                

        <?php  header( "refresh:1.0; url=../index.php");

		 		}                                         //END VERIFICACION EXITOSA.

		

		}else{                              // ENTONCES NO ESTA LOGEADO...

			if($_SESSION['sistema_usuario']['verificacion']=="1"){          //YA ESTA VERIFICADO  ?>

				<div class="vert-center" style="margin-top: 17%">      

		

						<div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">

		

							<div class="alert alert-success text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">

		

							  <strong><?php echo $_SESSION['sistema_usuario']['nombre_usuario'] ?></strong> usted ya es un usuario verificado.

		

							</div>

		

						</div>

		

				</div>		

<?php      



			header( "refresh:1.0; url=../index.php");

			}else{                                        // END YA ESTA VERIFICADO			

				header("Location: http://couchinn.com/layout/index.php?seccion=accesoRestringido");  

			}

		} 

} ?>