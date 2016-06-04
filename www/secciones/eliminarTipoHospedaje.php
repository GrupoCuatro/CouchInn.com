<? if(isset($_POST['Eliminar'])) {   // si llego el boton de eliminar tipo de hospedaje, lo eliminamos logicamente.
			$id_tipo = $_POST['id_tipo'];
			$nombre_tipo = $_POST['nombre_tipo'];
			$strQueryCantidad = "SELECT * FROM `hospedaje` WHERE `id_tipo` = '".$id_tipo."'";
			
			$queryCantidad = mysqli_query($conexion,$strQueryCantidad);
			
			if (mysqli_affected_rows($conexion) > 0) { // SI TENGO TIPOS DE HOSPEDAJE UTILIZADOS EN HOSPEDAJE, INFORMO QUE NO SE PUEDE ELIMINAR   ?>
						<div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">
							<div class="alert alert-danger text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							  El tipo de hospedaje <strong style="text-decoration: underline;"><?php echo $nombre_tipo; ?></strong> no pudo ser dado de baja, ya que esta siendo utilizado en alguna publicaci&oacute;n.
							</div>
						</div>
					
				            	
	<?php }else {    // SE DESHABILITA EL TIPO DE HOSPEDAJE
			$strQuery = "UPDATE `tipo-hospedaje` 
					 SET `habilitado` = '0' 
					 WHERE `id_tipo` = '".$id_tipo."'";	
		
			mysqli_query($conexion,$strQuery);		
			
			if (mysqli_affected_rows($conexion) == 1){ ?>				    
						<div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">
							<div class="alert alert-success text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">
                            	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							  El tipo de hospedaje <strong style="text-decoration: underline;"><?php echo $nombre_tipo; ?></strong> ha sido dado de baja correctamente.
							</div>
						</div>						
		<?php }else{ ?>				
						<div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">
							<div class="alert alert-danger text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">
							 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              El tipo de hospedaje <strong style="text-decoration: underline;"><?php echo $nombre_tipo; ?></strong> no pudo ser dado de baja.
							</div>
						</div>					
		<?php }	
					
		}
	
	} ?>