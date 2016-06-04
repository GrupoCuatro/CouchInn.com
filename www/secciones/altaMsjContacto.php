<?php
	if (isset($_POST['enviar_contacto'])){
	
		$nombre_contacto = $_POST['nombre_contacto'];
		$apellido_contacto = $_POST['apellido_contacto'];
		$mail_contacto = $_POST['mail_contacto'];	
		$fecha_contacto = date("Y-m-d H:i:s");
		$asunto_contacto = $_POST['asunto_contacto'];	
		$mensaje_contacto = $_POST['mensaje_contacto'];
		$leido_contacto = false;
		
		$strQuery = "INSERT INTO `u541503574_couch`.`contacto-administrador` (`id_contacto` , `nombre_contacto` , `apellido_contacto` , `asunto_contacto` , `mail_contacto` , `fecha_contacto` , `mensaje_contacto` , `leido_contacto`) VALUES (NULL , '".$nombre_contacto."' , '".$apellido_contacto."' , '".$asunto_contacto."' , '".$mail_contacto."' , '".$fecha_contacto."' , '".$mensaje_contacto."' , '".$leido_contacto."')";	
					 
		$_SESSION['sistema_usuario']['query'] = $strQuery;
		
		$query = mysqli_query($conexion,$strQuery);
		
		if ($query) {  ?>
			<section>
				<div class="vert-center" style="margin-top: 17%">      
					<div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">
						<div class="alert alert-success text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">
						  <strong>El mensaje</strong> ha sido enviado correctamente al administrador.
						</div>
					</div>
				</div>
			</section>		
	<?php }else{  ?>
			<section>
				<div class="vert-center" style="margin-top: 17%">      
					<div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">
						<div class="alert alert-danger text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">
						  <strong>El mensaje</strong> no ha sido enviado.
						</div>
					</div>
				</div>
			</section>			
	<?php } }
	
	header( "refresh:3.5; url=../index.php"); 	
?>