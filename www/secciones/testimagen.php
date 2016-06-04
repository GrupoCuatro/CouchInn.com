<?php
	if(isset($_POST['foto_usuario'])){
		
			$errores = array();
			
			 $content = null;
			 $fileType = null;
			 
			 
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
			 
		
		
		$strQuery = "INSERT INTO `u541503574_couch`.`usuario2` (`id_usuario`, `foto_usuario` , `extension_imagen`) VALUES (NULL, '".$content."' , '".$fileType."')";
		
		
		$_SESSION['consulta'] = $strQuery;
		
		mysqli_query($conexion,$strQuery);
		
		
		
	}


?>


<section>

	<div class="col-lg-4 col-md-6 col-xs-10 col-md-offset-3 col-lg-offset-4 col-xs-offset-1 " style="margin-bottom: 210px;">

	<form action="" method="post" enctype="multipart/form-data">
	 
        <div class="form-group">
            <span class="label label-custom-two pull-left">Seleccionar imagen</span>
            <input type="file" class="form-control-file" name="imagen_usuario" accept="image/*">
            <small class="text-muted">Solo se aceptan imagenes.</small>
        </div>
    
    
        <button type="submit" name="foto_usuario" >SUBIME LA FOTO PAPA</button>
    
    </form>
</div>
</section>