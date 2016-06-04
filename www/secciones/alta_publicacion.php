

<script type="text/javascript" src="../js/validarAltaPublicacion.js"></script>



<?php if ( !isset($_POST['Publicar']) && isset($_SESSION['sistema_usuario'])){  // SI NO SE ENVIO EL FORMULARIO DE REGISTRARSE, SE MUESTRA EL FORMULARIO.?>



<section >



	



  <div class="text-center center-block datosUsuario">



		            <form name="formularioAltaPublicacion" action="./index.php?seccion=alta_publicacion" method="post" role="form" enctype="multipart/form-data" onsubmit="return validarAltaPublicacion(formularioAltaPublicacion)">



			<!-- DATOS DEL HOSPEDAJE-->



			<div class="col-lg-4 col-md-6 col-xs-10 col-md-offset-3 col-lg-offset-4 col-xs-offset-1 " style="margin-bottom: 10%;">





			<div class="panel panel-success">



              <div class="panel-heading">



                <h2 class="panel-title text-center">Publicar Hospedaje</h2>



              </div>



              <div class="panel-body">



					<input type="hidden"  name="id_usuario" value="<?php echo $id; ?>" />



					<div class="form-group">



						<span class="label label-custom-two pull-left">Titulo</span>

                      

	

                

                        <input type="text" class="form-control" name="titulo"  placeholder="Minimo 10 caracteres." required />





					</div>



				



					<div class="form-group">



						<span class="label label-custom-two pull-left">Descripcion del Hospedaje</span>                     

				    	

				

				

                

                       <textarea name="descripcion" rows="5" cols="20" class="form-control" maxlength="500" placeholder="Máximo 500 caracteres."></textarea>



				  </div>



					



					<div class="form-group">



		

						<span class="label label-custom-two pull-left">Capacidad de Hospedaje</span>

      	                

				    

                

                        <input type="number" class="form-control" name="capacidad" min="0" max="999999" placeholder="Capacidad de Hospedaje" required />

					

					</div>

                    

                    

 				<div class="form-group">

 

                		<span class="label label-custom-two pull-left">Tipo de Hospedaje</span>

 				</div>

 

 				

				<div class="form-group">

			  		<?php   $mysqli="SELECT * 

					FROM  `tipo-hospedaje`   "	;				

					$query=mysqli_query($conexion,	$mysqli);	

				

	            	?>

 

                 	<select name="tipo" style="width:100%" class="form-control"> 

						<?php while( $row = mysqli_fetch_array($query)){	?>

         				<option class="form-control" value= "<?php echo $row['id_tipo']?>"   ><span>  <?php echo  $row['nombre_tipo']?></span> </option> 

                    <?php } ?>

                    </select>	

                </div>

                    

				<div class="form-group">

					<?php require("../secciones/paises.php"); ?>            

                </div>


                      <p><span class="label label-custom-two pull-left">Fecha</span>

                        <input type="date" class="form-control" name="fecha" required="required" />

                      </p>

                     



           	<div class="form-group">

           		<p><span class="label label-custom-two pull-left">Descripci&oacuten de la Imagen</span><p>

           		<input type="text"  class="form-control" name="descripcionimagen1" placeholder="Minimo 5 caracteres" required>

           	</div>           

                      

			<div class="form-group">                    

 				<p><span class="label label-custom-two pull-left">Imagen</span></p>                       

				<input type="file" accept="image/*" name="imagen" id="imagen1" required/>

			</div>                     

                     

                     

 

<?php if( $_SESSION['sistema_usuario']['rol_usuario']=='Premium'){?>                    

                     

 

                      

                      

                      <div class="form-group">

           		<p><span class="label label-custom-two pull-left">Descripci&oacuten de la Imagen</span><p>

           		<input type="text" id="premium" class="form-control" name="descripcionimagen2" placeholder="Minimo 5 caracteres">

           	</div>           

                      

			<div class="form-group">                    

 				<p><span class="label label-custom-two pull-left">Imagen</span></p>                       

				<input type="file" accept="image/*" name="imagen" id="imagen2" />

			</div>

                    



                      <div class="form-group">

           		<p><span class="label label-custom-two pull-left">Descripci&oacuten de la Imagen</span><p>

           		<input type="text"  class="form-control" name="descripcionimagen3" placeholder="Minimo 5 caracteres">

           	</div>           

                      

			<div class="form-group">                    

 				<p><span class="label label-custom-two pull-left">Imagen</span></p>                       

				<input type="file" accept="image/*" name="imagen" id="imagen3" />

			</div>





                    <div class="form-group">

           		<p><span class="label label-custom-two pull-left">Descripci&oacuten de la Imagen</span><p>

           		<input type="text"  class="form-control" name="descripcionimagen4" placeholder="Minimo 5 caracteres">

           	</div>           

                      

			<div class="form-group">                    

 				<p><span class="label label-custom-two pull-left">Imagen</span></p>                       

				<input type="file" accept="image/*" name="imagen" id="imagen4" />

			</div>





                      <div class="form-group">

           		<p><span class="label label-custom-two pull-left">Descripci&oacuten de la Imagen</span><p>

           		<input type="text"  class="form-control" name="descripcionimagen5" placeholder="Minimo 5 caracteres">

           	</div>           

                      

			<div class="form-group">                    

 				<p><span class="label label-custom-two pull-left">Imagen</span></p>                       

				<input type="file" accept="image/*" name="imagen" id="imagen5" />

			</div>







                      

                      

                      

				

					    <?php }?>



					 <div>

                       <span class="label label-custom-two pull-left">Reglas de convivencia:</span>

             

                     

                     

                     </div>



<textarea name="convivencia" rows="10" cols="40" class="form-control" placeholder="Aqui puede ingresar una descripcion de aquellas que sean sus reglas de convivencia de las que el viajante deberia estar al tanto para que ambos disfruten de una grata experiencia."></textarea>

				      

					 

					

				<div class="panel-footer">



                   <center>



                   	   <div class="form-group">	    



							<button type="submit" class="btn btn-lg btn-custom-two" name="Publicar" title="Publicar">Publicar</button>



                            <button type="reset" class="btn btn-lg btn-custom-two" title="Limpiar">Limpiar</button>                



                            <button class="btn btn-lg btn-custom-two" title="Volver" onClick="javascript: history.back()">Volver</button>                                                 



                       </div>



                   </center>  



                </div>



		    </div>

					



		</div>





<!-- FIN DATOS DEL HOSPEDAJE  -->       



		  



		  <p>

		    

		    

	      </p>

		  

          

          

          

          

          

		</div>

</div>

</div>

</div>

</div>

</div>





	</div>

    </form>



</section>



<?php }else{   //SINO SE VALIDA EL FORMULARIO Y SE DA DE ALTA  UN HOSPDAJE NUEVO.







	//var_dump($_POST);

	

	

	$id_usuario = $_POST['id_usuario'];



	$titulo = $_POST['titulo'];

    $titulo = trim($titulo);

	$descripcion = $_POST['descripcion'];

       $descripcion= trim($descripcion);

	$capacidad = $_POST['capacidad'];

      

	$tipo = $_POST['tipo'];

	 

	$pais = $_POST['Paises'];

	

	$ciudad = $_POST['ciudad'];

	

	$fecha = $_POST['fecha']; 

	

 $reglas = $_POST['convivencia'];

    $reglas = trim($reglas);

 //subo imagen



$ruta="ftp://u541503574@www.couchinn.com/public_html/img";

$archivo=$_FILES['imagen']['tmp_name'];

$nombreArchivo=$_FILES['imagen']['name'];

move_uploaded_file($archivo,$ruta."/".$nombreArchivo);

$ruta=$ruta."/".$nombreArchivo;

$texto=$_POST['texto'];

$id=rand(1,200);









			

		

$strQuery ="INSERT INTO `hospedaje`(`id_hospedaje`, `id_usuario`, `id_ciudad`, `id_pais`, `id_tipo`, `descripcion`, `capacidad`, `titulo`, `fecha`, `hospedaje_imagen`, `hospedaje_extension`, `reglas`) VALUES  (NULL,'".$id_usuario."','".$ciudad."','".$pais."',' ".$tipo."' ,'".$descripcion."','".$capacidad."','".$titulo."','".$fecha."','".$ruta."','".$texto."','".$reglas."')";

















   





		



		



		

		$query = mysqli_query($conexion,$strQuery);

		



		if(mysqli_affected_rows($conexion) > 0){       //LA PUBLICACION DE DATOS FUE EXITOSA   ?>



			<div class="vert-center" style="margin-top: 10%">      



                <div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">



                    <div class="alert alert-success text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">



                      <strong>Se ha publicado correctamente el hospedaje</strong>.



                    </div>



                </div>



</div>	

			



<?php	}else{			  //SE PRODUJO UN ERROR EN LA PUBLICACION 

	header("Location: http://couchinn.com/layout/index.php?seccion=accesoRestringido"); } }?>



				

















  







