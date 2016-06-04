<?php	
	session_start();	
	
	if(isset($_POST['nombre_usuario']) && isset($_POST['password_usuario'])) {
		echo "ENTRO";
		if (isset($_SESSION['sistema_usuario'])){
			var_dump($_SESSION);
		}
		$username = $_POST['nombre_usuario'];
		$password = $_POST['password_usuario']; 
		//Este array guardará los errores de validación que surjan.
		$errores = array();
      
		if ( trim($username)=='' || is_null($username) ) {
			$usernameOK = false;
			$errores[] = 'El campo Usuario es incorrecto.';
		} else {
			$usernameOK = true;
		}      
      
		if ( trim($password)=='' || is_null($password) ) {
			$passwordOK = false;
			$errores[] = 'El campo Password es incorrecto.';
		}else {
			$passwordOK = true;			
		}
      
      	if ( $usernameOK && $passwordOK ) {      
        	echo "ENTRO ACA TAMB ".$username."   ".$password;
			require_once('../lib/claseAutenticadora.class.php');  
			//$username = str_replace ( array("&","'","<",">","[","]","*","^","OR","or","AND","and","\""), "" , $username);
			//$password = str_replace ( array("&","'","<",">","[","]","*","^","OR","or","AND","and","\""), "" , $password);  
			$userAuthentication = new UserAuthentication();
			if($userAuthentication->doLogin($username,$password)) {
				echo "ESTAS LOGUEADO";
				var_dump($_SESSION);
				header( "refresh:1.5; url=../index.php");
          	}
      	}else {                              
             echo "<ul style='color: #f00;'>";             
             foreach ($errores as $error){ ?>
             	<li> <?php echo $error ?> </li>
       <?php } 
		 
             echo "</ul>";       
        }
  }      
?>	  		