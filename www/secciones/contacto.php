<script type="text/javascript" src="../js/validarFormularioContacto.js"></script>

<?php 

if( !isset($_SESSION['sistema_usuario']) || (isset($_SESSION['sistema_usuario']) && $_SESSION['sistema_usuario']['rol_usuario'] != "Administrador")) {	?>



        



		<section>

		<?php if( isset($_SESSION['sistema_usuario']) && strlen($_SESSION['sistema_usuario']['dni']) > 1) { ?>

        <form name="formulariocontacto" action="./index.php?seccion=altaMsjContacto" method="post" role="form" onsubmit="return validarFormularioContacto(formulariocontacto, true)">

        <?php } else { ?>

        <form name="formulariocontacto" action="./index.php?seccion=altaMsjContacto" method="post" role="form" onsubmit="return validarFormularioContacto(formulariocontacto, false)">

        <?php } ?>     






			<!-- ENVIAR UN MENSAJE AL ADMINISTRADOR -->



            <div class="col-lg-4 col-md-6 col-xs-10 col-md-offset-3 col-lg-offset-4 col-xs-offset-1 " style="margin-bottom: 10%;">



            <div class="panel panel-success">



              <div class="panel-heading">



                <h2 class="panel-title text-center">Enviar un mensaje al administrador</h2>



              </div>



              <div class="panel-body">



              		<?php if (!isset($_SESSION['sistema_usuario'])){   // SI NO ESTA LOGUEADO MOSTRAMOS EL FORMULARIO PARA COMPLETAR   ?>  



					<div class="form-group">



						<span class="label label-custom-two pull-left">Nombre</span>



						<input type="text" class="form-control" placeholder="Nombre" name="nombre_contacto" required>



					</div>				







					<div class="form-group">



						<span class="label label-custom-two pull-left">Apellido</span>



						<input type="text" class="form-control" placeholder="Apellido" name="apellido_contacto" required>



					</div>                   







					<div class="form-group">



						<span class="label label-custom-two pull-left">Mail</span>



						<input type="email" class="form-control" placeholder="ejemplo@servidor.dominio" name="mail_contacto" required>



					</div>



                    



            <?php } else{    //	SI ESTA LOGUEADO MOSTRAMOS EL FORMULARIO CON LOS DATOS DEL USUARIO LOGUEADO. ?>



					<div class="form-group">



						<span class="label label-custom-two pull-left">Nombre</span>				



						<input type="text" class="form-control" placeholder="<?php echo "@".$_SESSION['sistema_usuario']['nombre_usuario']." ".$_SESSION['sistema_usuario']['nombre']; ?>" value="<?php echo "@".$_SESSION['sistema_usuario']['nombre_usuario']." ".$_SESSION['sistema_usuario']['nombre']; ?>" disabled>                        



					</div>







			<?php  if (!$_SESSION['sistema_usuario']['apellido'] == '') { ?>

					<div class="form-group">



						<span class="label label-custom-two pull-left">Apellido</span>



						<input type="text" class="form-control" placeholder="<?php echo $_SESSION['sistema_usuario']['apellido']; ?>" value="<?php echo $_SESSION['sistema_usuario']['apellido']; ?>" disabled>



					</div> 

                    <input type="hidden" name="apellido_contacto" value="<?php echo $_SESSION['sistema_usuario']['apellido']; ?>">        					

					

		 <?php } ?>	

					          







					<div class="form-group">



						<span class="label label-custom-two pull-left">Mail</span>



						<input type="email" class="form-control" placeholder="<?php echo $_SESSION['sistema_usuario']['mail']; ?>" value="<?php echo $_SESSION['sistema_usuario']['mail']; ?>" disabled>



					</div>                    



						



		<?php	?>



				<input type="hidden" name="nombre_contacto" value="<?php echo "@".$_SESSION['sistema_usuario']['nombre_usuario']." ".$_SESSION['sistema_usuario']['nombre']; ?>">



				



				<input type="hidden" name="mail_contacto" value="<?php echo $_SESSION['sistema_usuario']['mail'] ?>">



                



	<?php	}   ?>                    







                    <div class="form-group">



						<span class="label label-custom-two pull-left">Asunto</span>



						<input type="text" class="form-control" placeholder="Al menos 4 caracteres" name="asunto_contacto" maxlength="40" required>



					</div>			







					<div class="form-group">



						<span class="label label-custom-two pull-left">Mensaje</span>



						<textarea class="form-control" placeholder="Al menos 10 caracteres" maxlength="150" rows="5" name="mensaje_contacto" required ></textarea>



					</div>                    



              </div>



                    



  			            



           <!-- FIN Enviar mensaje -->    







				<div class="panel-footer">



                   <center>



                   	   <div class="form-group">	    



							<button type="submit" class="btn btn-lg btn-custom-two" name="enviar_contacto" title="Enviar mensaje">Enviar</button>



                            <button type="reset" class="btn btn-lg btn-custom-two" title="Limpiar">Limpiar</button>                



                            <button class="btn btn-lg btn-custom-two" title="Volver" onClick="javascript: history.back()">Volver</button>                                                 



                       </div>



                   </center>  



                </div>



                



             </div>



		</div>



       </form>



     </section>



  <?php } ?>