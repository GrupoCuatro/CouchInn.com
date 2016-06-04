<?php session_start(); ?>

<!DOCTYPE html>

<html lang="en" class="no-js" >

<head>

	<link rel="shortcut icon" type="image/x-icon" href="../couch.ico" />

    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <meta name="description" content="" />

    <meta name="author" content="" />

    <!--[if IE]>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <![endif]-->

    <title>CouchInn</title>

    <!-- BOOTSTRAP CORE CSS -->

    <link href="../assets/css/bootstrap.css" rel="stylesheet" />

    <!-- ION ICONS STYLES -->

    <link href="../assets/css/ionicons.css" rel="stylesheet" />

    <!-- FONT AWESOME ICONS STYLES -->

    <link href="../assets/css/font-awesome.css" rel="stylesheet" />

    <!-- FANCYBOX POPUP STYLES -->

    <link href="../assets/js/source/jquery.fancybox.css" rel="stylesheet" />

    <!-- STYLES FOR VIEWPORT ANIMATION -->

    <link href="../assets/css/animations.min.css" rel="stylesheet" />

    <!-- CUSTOM CSS -->

    <link href="../assets/css/style-green.css" rel="stylesheet" />

    <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

    

    <!-- Custom CSS -->

    <link href="../assets/css/logo-nav.css" rel="stylesheet">

     <script src="http://www.google.com/jsapi"></script> 
	 <script type="text/javascript"> google.load("jquery", "1.2", {uncompressed:true}); </script>



    			

</head>	

<body data-spy="scroll" data-target="#menu-section">

  	<?php require("../db/conectar_db.php"); ?>

	<?php require("../layout/menu.php");   ?>

   	<?php date_default_timezone_set('America/Argentina/Buenos_Aires'); ?>

   

    <!--HOME SECTION START-->

   

    <?php

		$filename = "../secciones/" . $_GET["seccion"] . ".php";

		if (file_exists($filename)){

			require($filename);

		}else{

			require("../secciones/404.php");

		}

	 ?>

	

    

    <!--HOME SECTION END-->

    

   

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME -->

    <!-- CORE JQUERY -->

    <script src="../assets/js/jquery-1.11.1.js"></script>

    <!-- BOOTSTRAP SCRIPTS -->

    <script src="../assets/js/bootstrap.js"></script>

    <!-- EASING SCROLL SCRIPTS PLUGIN -->

    <script src="../assets/js/vegas/jquery.vegas.min.js"></script>

    <!-- VEGAS SLIDESHOW SCRIPTS -->

    <script src="../assets/js/jquery.easing.min.js"></script>

    <!-- FANCYBOX PLUGIN -->

    <script src="../assets/js/source/jquery.fancybox.js"></script>

    <!-- ISOTOPE SCRIPTS -->

    <script src="../assets/js/jquery.isotope.js"></script>

    <!-- VIEWPORT ANIMATION SCRIPTS   -->

    <script src="../assets/js/appear.min.js"></script>

    <script src="../assets/js/animations.min.js"></script>

    <!-- CUSTOM SCRIPTS -->

    <script src="../assets/js/custom.js"></script> 

    <script type="text/javascript" src="../js/validarTipoHospedaje.js"></script>

    <?php require("../layout/footer.php"); ?>

    <?php require("../db/desconectar_db.php"); ?>

    <?php require("../layout/modalBajaUsuario.php"); ?>

    <?php require("../secciones/modalAlerts.php"); ?>    

   

</body>

</html>