<!-- Ventana para editar precio de ganancia de administrador premium -->
<script type="text/javascript" src="../js/validarPrecioPremium.js"></script>
    <div id="modalEditarPrecio" class="modal fade" role="dialog">

        <div class="modal-dialog">

            <div class="modal-content">

            <form name="formulario" id="role-form" method="post" action="../layout/index.php?seccion=ganancias" onsubmit="javascript: return premium(this)">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" title="Cerrar">&times;</button>

        			</br>

                    <div class="form-group col-md-12">

                    	</br></br></br>

                        <center>

                          <h3 class="modal-title">Modificar el precio de Premium:</h3> 

                        </center>                 

                    </div>

                </div>

                <div class="modal-body">    

                    <div class="form-group col-md-12">                        

                        <input type="text" class="form-control" name="monto_premium" pattern="[0-9]" value="<?php echo $row['monto_premium']; ?>" required>                                 

                    </div>

        

                    <div class="clearfix"></div>

                </div>

                </br>

                <div class="modal-footer">    

                    <button type="submit" class="btn btn-success" name="Modificar" title="Guardar cambios" style="width:100px">Editar</button>

                    <button type="button" class="btn btn-danger" data-dismiss="modal" title="Cerrar" style="width:100px">Cancelar</button>    

                </div>

            </form>

            </div>

        </div>

    </div>	
 