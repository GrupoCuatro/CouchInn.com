<div class="navbar navbar-inverse navbar-fixed-top scroll-me" id="menu-section" >
    <div class="container">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="padding-right: 10px;padding-left: 10px;left: 64px;float: none">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>            
            <a class="navbar-brand" href="../index.php" style="padding-top: 1.5%;margin-left: 2%;padding-bottom: 45px;padding-left: 0px;padding-left: 10px;padding-right: 10px;">
            	<img id="brand-image" src="../img/couchinn.png" border="0" title="Inicio" alt="Inicio" height="40px">
            </a> 
       
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#home">INICIO</a></li>
                <li><a href="#services">SERVICES</a></li>
             
                <li><a href="#work">WORK</a></li>
                <li><a href="#team">EQUIPO</a></li>
              
                <li><a href="#contact">CONTACTO</a></li>
                
                <li><a href="#coments">COMENTARIOS</a></li>
                <?php if(isset($_SESSION['sistema_usuario'])){ 
					switch ($_SESSION['sistema_usuario']['rol_usuario']) {
						case "Administrador":
							?>                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  ADMINISTRAR <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a href="./index.php?seccion=ganancias&id=<?php echo $id?>" title="Ganancias">GANANCIAS</a></li>
                                  <li><a href="#">Usuarios Premiums</a></li>
                                  <li><a href="./index.php?seccion=tiposHospedaje">Tipos de hospedaje</a></li>
                                  <li class="divider"></li>
                                  <li><a href="./index.php?seccion=logout" title="Cerrar sesi&oacute;n">CERRAR SESION</a></li> 
                                </ul>
                            </li>
                            
                            
                            
							<?php
							break;
						case "Registrado":
							?>
							<li><a href="./index.php?seccion=login">REGISTADO</a></li>
							<?php
							break;
						case "Premium":
							?>
							<li><a href="./index.php?seccion=login">PREMIUM</a></li>
							<?php
							break;						
					}
				?>
					
				<?php }else{ ?>
							 <li><a href="./index.php?seccion=login">LOGIN</a></li>
                             <li><a href="./index.php?seccion=registrate">REGISTRATE</a></li>
                		<?php					
						} 
				if(isset($_SESSION['sistema_usuario']['nombre_usuario'])){ 
					$usuario = $_SESSION['sistema_usuario']['nombre_usuario'];  
					$usuario = strtoupper($usuario); 
					$id = $_SESSION['sistema_usuario']['id_usuario'];             ?> 				
            		
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <?php echo $usuario; ?> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a href="./index.php?seccion=perfil&id=<?php echo $id?>" title="Ver perfil">VER PERFIL</a></li>
                          <li class="disabled"><a href="#" disa >Acción #2</a></li>                         
                          <li><button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#bajaModal<?php echo $_SESSION['sistema_usuario']['id_usuario']; ?>">DAR DE BAJA LA CUENTA</button></li>
                          <li class="divider"></li>
                          <li><a href="./index.php?seccion=logout" title="Cerrar sesi&oacute;n">CERRAR SESION</a></li> 
                        </ul>
                	</li>
                    
                <?php } ?>                           
            </ul>
        </div>              
    </div>
</div>