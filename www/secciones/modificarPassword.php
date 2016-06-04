<script type="text/javascript" src="../js/validarModificarContraseña.js"></script>



<?php 

	if (isset($_SESSION['sistema_usuario'])) {  // SI ESTA LOGUEADO MUESTRA EL FORMULARIO DE MODIFICAR CONTRASEñA	

		$id = $_SESSION['sistema_usuario']['id_usuario'];    ?>

        

		<section>

        <form name="fmc" action="./index.php?seccion=updatePassword" method="post" role="form" onsubmit="return validarModificacion(fmc)">

            <div class="col-lg-4 col-md-6 col-xs-10 col-md-offset-3 col-lg-offset-4 col-xs-offset-1 " style="margin-bottom: 10%;">

            <div class="panel panel-success">

              <div class="panel-heading">

                <h2 class="panel-title text-center">Modificar contrase&ntilde;a</h2>

              </div>

              <div class="panel-body">

                    <input type="hidden"  name="id_usuario" value="<?php echo $id; ?>" />

                    

                    <div class="form-group">

                        <span class="label label-custom-two pull-left">Contrase&ntilde;a actual</span>

                        <input type="password" class="form-control" name="password_actual" maxlength="16" placeholder="Contrase&ntilde;a actual" required />

                    </div>                   

    

                    <div class="form-group">

                        <span class="label label-custom-two pull-left">Contrase&ntilde;a nueva</span>

                        <input type="password" class="form-control" name="password_nueva" maxlength="16" placeholder="Contrase&ntilde;a nueva" required />

                    </div>

    

                    <div class="form-group">

                        <span class="label label-custom-two pull-left">Confirmar contrase&ntilde;a</span>

                        <input type="password" class="form-control" name="confirmar_password" maxlength="16" placeholder="Confirmar contrase&ntilde;a" required />

                    </div>					  

              </div>          

  			            

           <!-- FIN MODIFICAR PASSWORD -->    



				<div class="panel-footer">

                   <center>

                   	   <div class="form-group">	    

							<button type="submit" class="btn btn-lg btn-custom-two" name="modificar" title="Modificar contrase&ntilde;a">Modificar</button>

                            <button type="reset" class="btn btn-lg btn-custom-two" title="Limpiar">Limpiar</button>

                            <button class="btn btn-lg btn-custom-two" title="Volver" onClick="javascript: history.back()">Volver</button>                            

                       </div>

                     </center>  

                </div>

                

             </div>

		</div>

       </form>

     </section>

  <?php } else {   // NO ESTA LOGUEADO  	  

	  header("Location: http://www.couchinn.com/layout/index.php?seccion=accesoRestringido");	  

  	}

?>