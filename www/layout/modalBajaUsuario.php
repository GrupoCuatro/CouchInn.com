<!-- Ventana para confirmar dar de baja la cuenta -->
    <div id="bajaModal<?php echo $_SESSION['sistema_usuario']['id_usuario']; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <form id="role-form"  method="post" action="../layout/index.php?seccion=darBajaUsuario">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" title="Cerrar">&times;</button>
        			</br>
                    <div class="form-group col-md-12">
                    	</br></br></br>
                        <center>
                          <h3 class="modal-title">¿Esta seguro que desea eliminar su cuenta del sistema?</h4> 
                        </center>                 
                    </div>
                </div>
                <div class="modal-body">    
                    <div class="form-group col-md-12">
                        <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['sistema_usuario']['id_usuario']; ?>"/>                                   
                    </div>
        
                    <div class="clearfix"></div>
                </div>
                </br>
                <div class="modal-footer">    
                    <button type="submit" class="btn btn-success" title="Eliminar cuenta" style="width: 127px" >Eliminar Cuenta</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" title="Cerrar" style="width: 127px">Cancelar</button>    
                </div>
            </form>
            </div>
        </div>
    </div>	