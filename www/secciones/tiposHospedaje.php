<?php require('../secciones/eliminarTipoHospedaje.php'); ?>



<?php require('../secciones/modificarTipoHospedaje.php'); ?>



<?php require('../secciones/agregarTipoHospedaje.php'); ?>















<?php  // validamos que este logueado y sea administrador.

	if(isset($_SESSION['sistema_usuario']) && $_SESSION['sistema_usuario']['rol_usuario'] == "Administrador"){	 ?>

		

		<section>	

		 <div class="col-lg-6 col-md-8 col-xs-10 col-md-offset-2 col-lg-offset-3 col-xs-offset-1 " style="margin-bottom: 50px;">	

			<button class="btn btn-lg btn-info" data-toggle="modal" data-target="#agregarTipoHospedajeModal" title="Agregar tipo de hospedaje">Agregar tipo de hospedaje</button>

		 </div>

					   

		<?php

		

			$strQuery = "SELECT * FROM `tipo-hospedaje` WHERE `habilitado` = true";

			

			$query = mysqli_query($conexion,$strQuery);

		?>

		   

		<div class="col-lg-6 col-md-8 col-xs-10 col-md-offset-2 col-lg-offset-3 col-xs-offset-1 " style="margin-bottom: 210px;">		 

					

		<?php

			while( $row = mysqli_fetch_array($query)){	?> 

            

            	<div class="panel panel-success">

                  <div class="panel-heading">                  	

                    <h2 class="panel-title text-center"><?php echo $row['nombre_tipo']; ?></h2>

                  </div>                  

                  <div class="panel-footer" style="padding-bottom: 0px;">

                  </br>

                   <center>

                   	   <div class="form-group form-inline"> 

					   

                            <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#editarTipoHospedajeModal<?php echo $row['id_tipo'] ?>" title="Editar" style="width:100px">Editar</button>				

                            <!-- <form action='../layout/index.php?seccion=eliminarTipoHospedaje' method='post' onSubmit='return confirmarTipoHospedaje()'> 	 

                            <input type="hidden" name="id_tipo" value="<?php //echo $row['id_tipo'] ?>" />    --> 

                           <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#eliminarTipoHospedajeModal<?php echo $row['id_tipo'] ?>" title="Eliminar" style="width:100px">Eliminar</button>

                           </form>

                       </div>

                     </center>  

                   </div>                       

          </div>    

            

            

          			

						  

		<?php		

		

			//MODAL ELIMINAR TIPO DE HOSPEDAJE

		

				require('../secciones/modalEliminarTipoHospedaje.php'); 		

		

		

			//MODAL EDITAR TIPO DE HOSPEDAJE

		

				require('../secciones/modalTipoHospedaje.php'); 

			}

			

			//MODAL AGREGAR TIPO DE HOSPEDAJE

		

				require('../secciones/modalAgregarTipoHospedaje.php'); 

			?>

			

		 </div>	

		 </section>

  <?php }else {                     // NO ESTA REGISTRADO O NO ES ADMINISTRADOR.



  				header("Location: http://couchinn.com/layout/index.php?seccion=accesoRestringido");				
						

			}

  		    						// END ELSE

		

?>