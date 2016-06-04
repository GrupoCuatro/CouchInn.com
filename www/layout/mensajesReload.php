
<?php $strQuery = "SELECT * FROM `contacto-administrador` WHERE `leido_contacto` = 'false'";
							mysqli_query($conexion, $strQuery);	
							$cantidad_mensajes = mysqli_affected_rows($conexion);	
					    ?> 

 
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  <?php if ($cantidad_mensajes > 0 ) { echo "<span class='glyphicon glyphicon-comment' aria-hidden='true'></span>";}?> MENSAJES <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">     
                                  <li><a href="./index.php?seccion=mensajes-contacto" title="<?php if($cantidad_mensajes > 0){echo "Tiene ".$cantidad_mensajes." mensajes nuevos";}else{ echo "No tiene mensajes nuevos";} ?>"> Ver mensajes <span class="badge"><?php if($cantidad_mensajes > 0){echo $cantidad_mensajes." nuevos"; }?></span></a></li>
                                  <li><a href="./index.php?seccion=mensajes-contacto-leidos" title="Mensajes le&iacute;dos">Mensajes le&iacute;dos</a></li>                                  
                                  <li class="divider"></li>
                                </ul>
                            		