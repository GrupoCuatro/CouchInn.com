<?php if(isset($_POST['Agregar'])) {   // si llego el boton de eliminar tipo de hospedaje, lo eliminamos logicamente.
			
			$nombre_tipo = $_POST['nombre_tipo'];
				
			$nombre_tipo = trim($nombre_tipo);      // sacamos los espacios en los extremos
		

		
			$strQuery = "INSERT INTO `u541503574_couch`.`tipo-hospedaje` (`id_tipo` , `nombre_tipo`)
						VALUES (NULL, '".$nombre_tipo."')";

		 	
			mysqli_query($conexion,$strQuery);
			if (mysqli_affected_rows($conexion) > 0){ ?>
						<div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">
							<div class="alert alert-success text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">
                            	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							 Se ha agregado el tipo de hospedaje: <strong style="text-decoration: underline;"><?php echo $nombre_tipo; ?></strong> correctamente.
							</div>
						</div>						
	<?php  }else{ 
					// consulta para saber si existe el tipo de hospedaje
					$strQuery = "SELECT `nombre_tipo` FROM `tipo-hospedaje` WHERE `nombre_tipo` LIKE '".$nombre_tipo."'";
					mysqli_query($conexion,$strQuery);
					if (mysqli_affected_rows($conexion) > 0){ //si existe el tipo, se verifica si esta habilitado  
						$strQuery = "SELECT `nombre_tipo` FROM `tipo-hospedaje` WHERE `nombre_tipo` LIKE '".$nombre_tipo."' AND `habilitado` = true";
						mysqli_query($conexion,$strQuery);
						if (mysqli_affected_rows($conexion) > 0){ //el tipo de hospedaje existe y esta habilitado.  ?>
							<div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">
								 <div class="alert alert-danger text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									El tipo de hospedaje: <strong style="text-decoration: underline;"><?php echo $nombre_tipo; ?></strong> ya existe.
								</div>
							</div> 
				<?php   }else{                           // EL TIPO DE HOSPEDAJE EXISTE, PERO NO ESTA HABILITADO. 
								$strQuery = "UPDATE `tipo-hospedaje` 
										 SET `habilitado` = '1'    
										 WHERE `nombre_tipo` = '".$nombre_tipo."'";	
								
								$query = mysqli_query($conexion,$strQuery);
								if (mysqli_affected_rows($conexion) > 0) { // SI LA CONSULTA FUE CORRECTA DA UN ALERT DE EXITO.  ?>
									<div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">
										 <div class="alert alert-success text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">
											<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
											Se ha agregado el tipo de hospedaje: <strong style="text-decoration: underline;"><?php echo $nombre_tipo; ?></strong>.
										</div>
									</div>            
				<?php 			}	
	
  			    }
		   }
		}
		
		}
?>