<?php



    if (!isset($_SESSION['sistema_usuario'])) { header("Location: http://www.couchinn.com/layout/index.php?seccion=accesoRestringido"); }



	//session_start();



	



	//require("../db/conectar_db.php"); 



	$id = $_SESSION['sistema_usuario']['id_usuario'];



	



	



	$strQuery = "SELECT * FROM usuario WHERE id_usuario = '".$id."'";







	



	$query = mysqli_query($conexion,$strQuery);



	?>



    <section id="perfil">



    <?php



	while( $row = mysqli_fetch_array($query)){	?>    	



                  



		<!--TEAM SECTION START-->



			



                <div class="container">



                <div class="row text-center header animate-in" data-anim-type="fade-in-up">



                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">



                <h3>Perfil de <?php echo $row['nombre_usuario']; ?></h3>



                <hr />



                </div>



                </div>



                <div class="row animate-in" data-anim-type="fade-in-up" style="margin-bottom: 10%;">



                



                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4">



                <div class="team-wrapper">



                <div class="team-inner" style="padding-top: 7px;" >



                <center>

				<?php if(is_null($row['foto_usuario'])){ ?>

                	<img class="img-circle-perfil" src="../img/userdefault.png" width="80px" style="background-color: ghostwhite" /> 

                <?php }else{   ?>

                	<img class="img-circle-perfil" src="../secciones/foto.php?id=<?php echo $row['id_usuario']; ?>" width="80px" /> 

		<?php } ?>

                </br>    



            	<span class="label label-info label-lg" ><?php echo $row['nombre_usuario']; ?></span></a>



                </center>



                </br>



<?php if(isset($_SESSION['sistema_usuario']) && $_SESSION['sistema_usuario']['rol_usuario'] == "Administrador"){   ?>
                <a title="Usuario Administrador"> <i class="fa fa-user-secret" ></i> </a>
<?php } ?>

<?php if(isset($_SESSION['sistema_usuario']) && $_SESSION['sistema_usuario']['rol_usuario'] == "Premium"){   ?>
                <a title="Usuario Premium"> <i class="fa fa-star" ></i> </a>
<?php } ?>

<?php if(isset($_SESSION['sistema_usuario']) && $_SESSION['sistema_usuario']['rol_usuario'] == "Registrado"){   ?>
                <a title="Usuario Registrado"> <i class="fa fa-user" ></i> </a>
<?php } ?>


                </div>



                <div class="description">



                <h3><?php echo $row['nombre']." ".$row['apellido']; ?></h3>



                <h4> <strong> <?php 
                if(isset($_SESSION['sistema_usuario']) && $_SESSION['sistema_usuario']['verificacion'] == "1"){
                    echo "USUARIO VERIFICADO";
                } else {
                    echo $row['rol_usuario']; } ?> </strong></h4>



                <p>



                <?php echo $row['telefono']; 



					  echo "</br>";



					  echo $row['dni']; 



					  echo "</br>";



					  echo $row['direccion']; 



				



				?>



                </p>



                </div>



                </div>



                </div>



                



                </div>



                </div>



                </div>



                



                



	<!--TEAM SECTION END-->



            



            



            



            



            



            



            



        



        </div>



        <?php



		



	}



	



	//require("../db/desconectar_db.php");



?>



	</section>