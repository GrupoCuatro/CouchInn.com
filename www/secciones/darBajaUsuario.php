<?php

	

	

	var_dump($_POST);

	$id_usuario = $_POST['id_usuario'];

		

	$strQuery = "DELETE FROM `usuario` 

				 WHERE `id_usuario` = '".$id_usuario."'";	

	

	$query = mysqli_query($conexion,$strQuery);

	

	if ($query){ ?>

		<section>

            <div class="vert-center" style="margin-top: 10%">      

                <div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">

                    <div class="alert alert-success text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">

                      <strong>Su cuenta fue dada de baja correctamente.</strong>

                    </div>

                </div>

            </div>

        </section>	

<?php }else{ ?>

		<section>

            <div class="vert-center" style="margin-top: 10%">      

                <div class="col-lg-6 col-md-4 col-xs-10 col-md-offset-4 col-lg-offset-3 col-xs-offset-1 ">

                    <div class="alert alert-success text-center" style="padding-top: 30px; padding-bottom: 30px;font-size: x-large">

                      <strong>Su cuenta no puede ser dada de baja.</strong>

                    </div>

                </div>

            </div>

        </section>

<?php }	

	

	require_once('../lib/claseAutenticadora.class.php');  

    $userAuthentication = new UserAuthentication();

    $userAuthentication->doLogout();



	header( "refresh:5.5; url=../index.php"); 



	



?>