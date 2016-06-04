<!-- Ventana ver un mensaje de contacto -->
    <div id="modalVerMensaje<?php echo $row['id_contacto']; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <form id="role-form"  method="post" action="../layout/index.php?seccion=mensajes-contacto">
            	<input type="hidden" name="id_contacto" value="<?php echo $row['id_contacto']; ?>" />
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" title="Cerrar">&times;</button>
        			</br>
                    <div class="form-group col-md-12">
                    	</br></br></br>
                        <center>
                          <h3 class="modal-title">Mensaje de: <?php echo $row['nombre_contacto']." ".$row['apellido_contacto'];?></h3> 
                        </center>                 
                    </div>
                </div>
                <div class="modal-body">    
                    <div class="form-group col-md-12" style="font-size:17px">                       
                        <?php 
							echo "Asunto: ".$row['asunto_contacto'];
							echo "</br>";
							echo $row['mensaje_contacto'];
						?>                                 
                    </div>
        
                    <div class="clearfix"></div>
                </div>
                </br>
                <div class="modal-footer">    
                    <button type="submit" class="btn btn-info btn-md" title="marcar como leido" style="width: 144px;">Marcar como leido</button>
                    <button type="button" class="btn btn-danger btn-md" data-dismiss="modal" title="Cerrar" style="width: 144px;">Cerrar</button>    
                </div>
            </form>
            </div>
        </div>
    </div>	
 <!-- END Ventana ver un mensaje de contacto -->