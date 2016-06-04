		
		<div class="usuariologeado">
			
			<?php
                if (isset($_SESSION['sistema_usuario']['usuario']) && $_SESSION['sistema_usuario']['usuario'] != NULL ){
                    $usuario = $_SESSION["sistema_usuario"]["usuario"];
                    echo "<p>&raquo;&nbsp;Bienvenido: ".$usuario."<a href='../layout/index.php?seccion=logout'><img src='../../img/Boton_Cerrar.png' alt='Cerrar Sesi&oacute;n' title='Cerrar Sesi&oacute;n'/></a></p>";
                }else echo "<p>&raquo;&nbsp;Usted no esta logeado.</p>";
            ?>
			
		</div>    
        
        