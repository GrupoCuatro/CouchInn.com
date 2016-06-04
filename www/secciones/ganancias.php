<?php
	if(isset($_POST['monto_premium'])){       // SI LE LLEGO EL MODIFICAR DE PRECIO PREMIUM, ACTUALIZA EL PRECIO...
		$monto_precio = $_POST['monto_premium'];
		$monto_precio = trim($monto_precio);
		
		$strQuery = "UPDATE `administracion` SET `monto_premium` WHERE id_administracion = '1'";		
		
		mysqli_query($conexion,$strQuery);
		
		if(mysqli_affected_rows($conexion) > 0){    //SI REALIZO LA ACTUALIZACION, MUESTRA EL EXITO..  ?>
			<div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">
                <div class="alert alert-success text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 Se ha modificado el precio de premium a: <strong><?php echo $monto_precio; ?></strong> correctamente.
                </div>
            </div>	
			
<?php	}
	}

	$strQuery = "SELECT * FROM `administracion` WHERE 1";
	
	$query = mysqli_query($conexion,$strQuery);
	
	while( $row = mysqli_fetch_array($query)){

?>

        <section>
            <div class="col-lg-8 col-md-8 col-xs-10 col-md-offset-2 col-lg-offset-2 col-xs-offset-1 " style="margin-bottom: 10%;"> 
                <div class="col-xs-10 col-sm-6 col-md-4 col-lg-4 col-xs-offset-1 col-sm-offset-3 col-md-offset-4 col-lg-offset-4">
                    <div class="light-pricing popular">
                        <div class="price">
                            <sup>$</sup><?php echo $row['monto_premium']; ?>
                            <small>por &uacute;nica vez</small>
                        </div>
                        <div class="type">
                            PREMIUM
                        </div>
                        <ul>        
                            <li><i class="glyphicon glyphicon-picture"></i>1 a 5 Fotos en publicaciones </li>
                            <li><i class="glyphicon glyphicon-star"></i>Publicaciones destacadas </li>
                            <li><i class="glyphicon glyphicon-exclamation-sign"></i>Infinitas publicaciones</li>
                        </ul>
                        <div class="pricing-footer">                                    
                            <button type="button" class="btn button-custom btn-custom-one" data-toggle="modal" data-target="#modalEditarPrecio">Modificar precio</button>
                        </div>						
                    </div>
                </div>                  
            </div>                			
        </section>
        
        
        
        
  <?php require("../secciones/modalEditarPrecio.php");
  
  
  } // FIN DEL WHILE ?>
  