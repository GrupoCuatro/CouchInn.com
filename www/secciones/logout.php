<? if($_SESSION['sistema_usuario']) { ?>

	<section>

		<div class="vert-center" style="margin-top: 10%">      

			<div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">

				<div class="alert alert-danger text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">

				  <strong><?php echo "¡".$_SESSION['sistema_usuario']['nombre_usuario']."!"; ?></strong> ¡Usted ha cerrado la sesi&oacute;n en el sistema!

				</div>

			</div>

		</div>

	</section> 

 <?php require_once('../lib/claseAutenticadora.class.php');  

	   $userAuthentication = new UserAuthentication();

	   $userAuthentication->doLogout();

	   header( "refresh:1.0; url=../index.php");

 ?>

 

 

 <?php

 	}else

 		header("Location: http://www.couchinn.com/layout/index.php?seccion=accesoRestringido"); 

 ?>