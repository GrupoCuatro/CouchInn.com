<?php	

	//var_dump($_POST);
	
	
	$id_usuario = $_POST['id_usuario'];

	$titulo = $_POST['titulo'];

	$descripcion = $_POST['descripcion'];

	$capacidad = $_POST['capacidad'];
      
	$tipo = $_POST['tipo'];
	 
	$pais = $_POST['Paises'];
	
	$ciudad = $_POST['ciudad'];
	
	$fecha = $_POST['fecha']; 
	
 $reglas = $_POST['convivencia'];
 //subo imagen

$ruta="ftp://u541503574@www.couchinn.com/public_html/img";
$archivo=$_FILES['imagen']['tmp_name'];
$nombreArchivo=$_FILES['imagen']['name'];
move_uploaded_file($archivo,$ruta."/".$nombreArchivo);
$ruta=$ruta."/".$nombreArchivo;
$texto=$_POST['texto'];
$id=rand(1,200);



 
 ?>

	
    
	
		<?php
		

			
		
$strQuery ="INSERT INTO `hospedaje`(`id_hospedaje`, `id_usuario`, `id_ciudad`, `id_pais`, `id_tipo`, `descripcion`, `capacidad`, `titulo`, `fecha`, `hospedaje_imagen`, `hospedaje_extension`, `reglas`) VALUES  (NULL,'".$id_usuario."','".$ciudad."','".$pais."',' ".$tipo."' ,'".$descripcion."','".$capacidad."','".$titulo."','".$fecha."','".$ruta."','".$texto."','".$reglas."')";








   


		

		

		
		$query = mysqli_query($conexion,$strQuery);
		

		if($query){       //LA PUBLICACION DE DATOS FUE EXITOSA   ?>

			<div class="vert-center" style="margin-top: 17%">      

                <div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">

                    <div class="alert alert-success text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">

                      <strong>Se ha publicado correctamente el hospedaje </strong><?php $id_usuario ?>  .

                    </div>

                </div>

</div>		

			

<?php	}else{			  //SE PRODUJO UN ERROR EN LA PUBLICACION ?>
<div class="vert-center" style="margin-top: 17%">      

    <div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">

                    <div class="alert alert-danger text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">

                      <strong>No se ha podido publicar el hospedaje </strong><?php $id_usuario ?> </strong> .

                    </div>

                </div>

            </div>				

<?php	}

		

	

	header( "refresh:5.5; url=../inicio.php"); 

?>





		

	