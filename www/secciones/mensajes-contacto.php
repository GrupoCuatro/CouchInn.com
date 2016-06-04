<?php
	if(isset($_POST['id_contacto'])) {   // si llego el id del mensaje leido, actualizamos el mensaje.
		$id = $_POST['id_contacto'];
		$strQuery = "UPDATE `contacto-administrador` SET `leido_contacto` = '1' WHERE `id_contacto` = '".$id."'";
		$query = mysqli_query($conexion,$strQuery);
		
				
		if( mysqli_affected_rows($conexion) > 0){    //muestra un exito si el mensaje fue marcado como leido ?>
			<div class="col-lg-4 col-md-6 col-xs-10 col-md-offset-3 col-lg-offset-4 col-xs-offset-1 ">
            	<div class="alert alert-success text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>El mensaje fue marcado como leido correctamente.</strong>
            	</div>
        	</div> 
<?php		}else{   ?>
				<div class="col-lg-4 col-md-6 col-xs-10 col-md-offset-3 col-lg-offset-4 col-xs-offset-1 ">
            	<div class="alert alert-danger text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>El mensaje no pudo ser marcado como leido.</strong>
            	</div>
        	</div> 
<?php 	}		
	}

?>









<?php if(isset($_SESSION['sistema_usuario'])  &&  $_SESSION['sistema_usuario']['rol_usuario'] == "Administrador" ) { //SI ESTA LOGUEADO Y ES ADMINISTRADOR PUEDE VER LOS MENSAJES ?>

<section>
<div class="col-lg-6 col-md-8 col-xs-10 col-md-offset-2 col-lg-offset-3 col-xs-offset-1 " style="margin-bottom: 210px;">	
<?php
	$strQuery = "SELECT * FROM `contacto-administrador` WHERE `leido_contacto` = false";
	
	$query = mysqli_query($conexion, $strQuery);
	
	
	if( mysqli_affected_rows($conexion) > 0){ 
	
		while($row = mysqli_fetch_array($query)){ //LISTAMOS TODOS LOS MENSAJES NO LEIDOS ?>
    	
		           
			            
            <div class="panel panel-success">
                  <div class="panel-heading">                  	
                    <h2 class="panel-title text-center"><?php echo "De: ".$row['nombre_contacto']." ".$row['apellido_contacto']; ?></h2>
                  </div>
                  <div class="panel-body">  
                  		<?php 
							$date = date_create($row['fecha_contacto']);
							echo "<div class='text-right'> <span class='label label-info text-right' style='font-size:15px'><strong>".date_format($date, 'd-m-Y H:i')."</strong></span></div>"; ?>
							</br>					                   
      						<span class="label label-info" style="font-size:17px" ><?php echo "Asunto: ".$row['asunto_contacto'] ?></span> 
                                                         
                  </div>    
                  
                  <div class="panel-footer" style="padding-bottom: 0px;">
                   <center>
                   	   <div class="form-group">	
                            <label><button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#modalVerMensaje<?php echo $row['id_contacto']; ?>" style="width:100px" >Ver mensaje</button></label>                            
                            <button class="btn btn-success btn-md" title="Volver" onClick="javascript: history.back()" style="width:100px">Volver</button> 
                       </div>
                     </center>  
                   </div>                       
          </div>            
	

        
  <?php
  	// MODAL VER MENSAJE
  		require('../secciones/modalVerMensaje.php');   
  	//END MODAL VER MENSAJE
  ?>
        
        
        
        		
<?	   } // END WHILE 

	} else { // END DEL IF, SI NO HAY MENSAJES PARA MOSTRAR, MUESTRA UN MENSAJE   ?>
		<div class="col-lg-12 col-md-6 col-xs-10 col-md-offset-3 col-xs-offset-1 " style="padding-top: 40px;padding-bottom: 30px;margin-top: 25%;font-size: 18px;margin-left: 0px;">
            <div class="alert alert-info text-center">
                <strong>No existen mensajes no leidos.</strong>
            </div>
        </div> 
	
<?php } ?>
</div>
</section>

<?php } else { // END DEL IF DE LOGUEADO, si no esta logueado redirige
	header("Location: ../layout/index.php?seccion=accesoRestringido");
} ?>