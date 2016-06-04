<script type="text/javascript" src="../js/validarLogin.js"></script>

<?php 

	$entro = true;

	// SI LE PASA EL POST DE FORMULARIO, VERIFICA EL USUARIO

	if(isset($_POST['enviar_usuario'])){

		require("../verificacion/verificarUsuario.php");		

	}

	// FIN VERIFICAR USUARIO





	if ( !isset($_SESSION['sistema_usuario']['nombre_usuario']) && $entro) {   //SI NO ESTA LOGUEADO LE MUESTRA EL FORMULARIO



	?>



		<section>



			<div class="container">    



				<div class="row text-center header">        



					<div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 animate-in" data-anim-type="fade-in-up" >                



						<h3>LOGIN</h3>                 



						<div class="col-lg-4 col-xs-10 col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3 col-xs-offset-1 col-lg-offset-4">



							<div class="container-fluid-transparent-login">  



								<form name="formulariologin" action="../layout/index.php?seccion=login" method="post" onsubmit="return validarLogin(formulariologin)">



									<div class="form-group">



										<span class="label label-custom-two">Nombre de Usuario</span>



										<input type="text" class="form-control" name="nombre_usuario" placeholder="Nombre de Usuario" required/>



									</div>   



									<div class="form-group">



										<span class="label label-custom-two">Contraseña</span>



										<input type="password" class="form-control" name="password_usuario" placeholder="Contraseña" required/>



									</div>   



									<div class="form-inline">



										<input type="submit" class="btn button-custom btn-custom-two" name="enviar_usuario" value="Ingresar"/>



										<input type="reset" class="btn button-custom btn-custom-two" name="reset_usuario" value="Vaciar" />



									</div>          



								</form>



							</div>



						</div>



					</div>



				 </div>     



			</div>



		</section>



	<?php



	} else{ 

			if(isset($_SESSION['sistema_usuario']['nombre_usuario']) && $entro) { // SI ESTA LOGUEADO LO REDIRIGE AL INICIO



	?>	

                <section>

        

                    <div class="vert-center" style="margin-top: 10%">      

        

                        <div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">

        

                            <div class="alert alert-info text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">

        

                              <strong>¡Usted ya est&aacute logueado!</strong> Se lo redireccionar&aacute; al inicio.

        

                            </div>

        

                        </div>

        

                    </div>

        

                </section>



 



	 <?php 



           		header( "refresh:1.0; url=../index.php");

			}



	 }



	?>



		



	