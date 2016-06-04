<!-- Ventana para editar comentario -->
<div id="editarModal<?php echo $row['id_coment'] ?>" class="modal fade" role="dialog">
	<div class="modal-dialog">
    	<div class="modal-content">
        <form id="role-form"  method="post" action="./secciones/updateComentario.php">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" title="Cerrar">&times;</button>
    
                <div class="form-group col-md-12">
    				  <h4 class="modal-title">Editar comentario:</h4>                  
                </div>
            </div>
            <div class="modal-body">    
                <div class="form-group col-md-12">
                    <input type="hidden" name="id_coment" value="<?php echo $row['id_coment']; ?>"/>
                    <textarea name="comentario" class="form-control" rows="5" style="max-width: 538px;max-height: 741px"required ><?php echo $row['comentario']; ?></textarea>                
                </div>
    
                <div class="clearfix"></div>
            </div>
            <div class="modal-footer">    
                <button type="submit" class="btn btn-success" title="Guardar cambios" >Guardar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" title="Cerrar">Cerrar</button>    
            </div>
        </form>
        </div>
	</div>
</div>	