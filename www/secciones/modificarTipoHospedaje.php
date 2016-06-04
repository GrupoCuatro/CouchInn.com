<?php if(isset($_POST['Modificar'])) {   // si llego el boton de eliminar tipo de hospedaje, lo eliminamos logicamente.
			$id_tipo = $_POST['id_tipo'];
			$nombre_tipo = $_POST['nombre_tipo'];
				
			$nombre_tipo = trim($nombre_tipo);      // sacamos los espacios en los extremos
						
			$strQuery = "UPDATE `tipo-hospedaje` 
						 SET `nombre_tipo` = '".$nombre_tipo."'    
						 WHERE `id_tipo` = '".$id_tipo."'";	
				
			$query = mysqli_query($conexion,$strQuery);
			if (mysqli_affected_rows($conexion) > 0) { // SI LA CONSULTA FUE CORRECTA DA UN ALERT DE EXITO.  ?>
				<div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">
							<div class="alert alert-success text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">
                            	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							  <strong>Se ha modificado el tipo de hospedaje correctamente.</strong>
							</div>
				</div>						
		<?php }else{ ?>
				<div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">
							<div class="alert alert-danger text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">
                            	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							  <strong>No se ha modificado el tipo de hospedaje.</strong>
							</div>
				</div>
				
		<?php }		
  }
?>