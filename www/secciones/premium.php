<script type="text/javascript" src="../js/validarAltaPremium.js"></script>

<?php if ( !isset($_POST['modificar']) && isset($_SESSION['sistema_usuario']) && $_SESSION['sistema_usuario']['rol_usuario']!="Premium" && $_SESSION['sistema_usuario']['rol_usuario']!="Administrador" ){ ?>

<section id="premium">




<div class="col-lg-10 col-md-10 col-xs-10 col-md-offset-1 col-lg-offset-1 col-xs-offset-1 ">

            <div class="alert alert-info text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: large">

                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

              Estimado: <strong style="text-decoration: underline;"><?php echo $_SESSION['sistema_usuario']['nombre_usuario']; ?></strong>, mejorando su cuenta a Premium, usted podr&aacute disfrutar de mayores beneficios.</br>

                ¡Podr&aacute subir hasta 5 fotos en sus publicaciones! Cosa que los usuarios registrados solo pueden subir una foto.</br>

                ¡Podr&aacute aparecer en las publicaciones destacadas! Cosa que los usuarios registrados no pueden.</br>

                Por lo tanto, si quieres un mayor &eacutexito en la reserva de tus hospedajes, es posible que necesites ser un usuario de <em>Couchinn premium</em>.</br>

            </div>

     </div>



<?php if (isset($_SESSION['sistema_usuario'])){

  $mysqli="SELECT * FROM administracion WHERE id_administracion = '1'" ;       

  $query=mysqli_query($conexion,  $mysqli); 

  while( $row = mysqli_fetch_array($query)){  ?>





		<form name="formularioAP" action="./index.php?seccion=premium" method="post" role="form" onsubmit="return validarAltaPremium(formularioAP)" enctype="multipart/form-data">

			<div class="col-lg-4 col-md-6 col-xs-10 col-md-offset-3 col-lg-offset-4 col-xs-offset-1 " style="margin-bottom: 10%;">		           



			<!-- DATOS PARA SER PREMIUM -->

            

              <div class="panel panel-success">

                  <div class="panel-heading">

                    <h2 class="panel-title text-center">¡Cambiar a Premium!</h2>

                  </div>

              <div class="panel-body">

                  <input type="hidden"  name="id_usuario" value="<?php echo $id; ?>" />

                  </br></br>

                      <div class="form-group">

                      	<span class="label label-custom-two pull-left">Nombre del Titular</span>

                          <input type="text" class="form-control" placeholder="Como aparece en la tarjeta" name="nombre"> 

				               </div>


                      <div class="form-group">        

                          <span class="label label-custom-two pull-left">Documento del Titular</span>        

                          <input type="number" class="form-control" placeholder="Ingrese el Documento sin puntos '.'" name="documento" min="0" max="99999999">         

                      </div>


                      <div class="form-group">        

                          <span class="label label-custom-two pull-left">N&uacutemero de la tarjeta</span>        

                          <input type="number" class="form-control" placeholder="16 dígitos" name="numeros" min="0">      

                      </div>

                      <div class="form-group">        

                          <span class="label label-custom-two pull-left">Vencimiento</span>        

                          <input type="number" class="form-control" placeholder="Formato MMAA" name="vencimiento" min="0">      

                      </div>

                      <div class="form-group">        

                          <span class="label label-custom-two pull-left">C&oacutedigo de Seguridad</span>        

                          <input type="number" class="form-control" placeholder="Tres dígitos al dorso de la tarjeta" name="codigo" min="0">      

                      </div>

                      <div class="form-group">        

                          <span class="label label-custom-two pull-left">Monto a Cobrar</span>        

                          <input type="text" class="form-control" value="$<?php echo $row['monto_premium'] ; ?>" name="monto" min="0" disabled>      

                      </div>

                </div>                     
     

                <div class="panel-footer">

                 <center>

                 	   <div class="form-group">	

                          <button type="submit" class="btn btn-lg btn-custom-two" name="modificar" title="Modificar">Convertirse</button>

                          <button type="reset" class="btn btn-lg btn-custom-two" title="Limpiar">Limpiar</button>

                          <button class="btn btn-lg btn-custom-two" title="Volver" onClick="javascript: history.back()">Volver</button> 

                     </div>

                   </center>  

                 </div>

          </div>            

           <!-- FIN DATOS PARA SER PREMIUM --> 
<?php } } // END DEL WHILE?>
    </form>      


</section>	

<?php }else{   //SE MANDO EL POST DE VERIFICACION

      

      if(isset($_POST['modificar'])) {              // si le pasa el formulario...

        $id_usuario = $_POST['id_usuario'];

        $strQuery = "UPDATE `usuario` SET `rol_usuario` = 'Premium' WHERE `id_usuario` = '".$id_usuario."'"; 

        $_SESSION['sistema_usuario']['rol_usuario'] = "Premium";

    

        mysqli_query($conexion,$strQuery);

        

    

        if(mysqli_affected_rows($conexion) > 0){       //LA VERIFICACION FUE EXITOSA  ?>

    

          <div class="vert-center" style="margin-top: 17%">      

    

            <div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">

    

              <div class="alert alert-success text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">

    

                <strong>Felicidades: <?php echo $_SESSION['sistema_usuario']['nombre_usuario'] ?></strong> usted ahora es un usuario premium.

    

              </div>

    

            </div>

    

        </div>  

                

                

        <?php  header( "refresh:1.0; url=../index.php");

        }                                         //END VERIFICACION EXITOSA.

    

    }else{                              // ENTONCES NO ESTA LOGEADO...

      if($_SESSION['sistema_usuario']['rol_usuario']=="Premium"){          //YA ESTA PREMIUM  ?>

        <div class="vert-center" style="margin-top: 17%">      

    

            <div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">

    

              <div class="alert alert-success text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">

    

                <strong><?php echo $_SESSION['sistema_usuario']['nombre_usuario'] ?></strong> usted ya es un usuario premium.

    

              </div>

    

            </div>

    

        </div>    

<?php      



      header( "refresh:1.0; url=../index.php");

      }else{                                        // END YA ESTA PREMIUM     

        header("Location: http://couchinn.com/layout/index.php?seccion=accesoRestringido");  

      }

    } 

} ?>