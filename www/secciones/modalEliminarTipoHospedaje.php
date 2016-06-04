<!-- Ventana para eliminar un tipo de hospedaje -->

    <div id="eliminarTipoHospedajeModal<?php echo $row['id_tipo']; ?>" class="modal fade" role="dialog">

        <div class="modal-dialog">

            <div class="modal-content">

            <form name="formularioEliminar" id="role-form" method="post" action="../layout/index.php?seccion=tiposHospedaje">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" title="Cerrar">&times;</button>

        			</br>

                    <div class="form-group col-md-12">

                    	</br></br></br>

                        <center>

                          <h3 class="modal-title">Eliminar el tipo de hospedaje:</h3> 

                        </center>                 

                    </div>

                </div>

                <div class="modal-body">    

                    <div class="form-group col-md-12">

                        <?php echo $row['nombre_tipo']; ?>                                

                    </div>

        

                    <div class="clearfix"></div>

                </div>

                </br>
				<input type="hidden" name="id_tipo" value="<?php echo $row['id_tipo']; ?>">
                <input type="hidden" name="nombre_tipo" value="<?php echo $row['nombre_tipo']; ?>">
                <div class="modal-footer">    

                    <button type="submit" name="Eliminar" class="btn btn-info" title="Eliminar" style="width:100px">Eliminar</button>

                    <button type="button" class="btn btn-danger" data-dismiss="modal" title="Cerrar" style="width:100px">Cancelar</button>    

                </div>

            </form>

            </div>

        </div>

    </div>	
 <!-- END Ventana para eliminar un tipo de hospedaje -->