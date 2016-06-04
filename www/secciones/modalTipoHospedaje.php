<!-- Ventana para editar un tipo de hospedaje -->

<script type="text/javascript" src="../js/validarTipoHospedaje.js"></script>

    <div id="editarTipoHospedajeModal<?php echo $row['id_tipo']; ?>" class="modal fade" role="dialog">



        <div class="modal-dialog">



            <div class="modal-content">



            <form name="formulariotipohospedaje" id="role-form" method="post" action="../layout/index.php?seccion=tiposHospedaje" onsubmit="return validarTipoHospedaje(this)">

                <div class="modal-header">



                    <button type="button" class="close" data-dismiss="modal" title="Cerrar">&times;</button>



        			</br>



                    <div class="form-group col-md-12">



                    	</br></br></br>



                        <center>



                          <h3 class="modal-title">Modificar el tipo de hospedaje:</h3> 



                        </center>                 



                    </div>



                </div>



                <div class="modal-body">    



                    <div class="form-group col-md-12">



                        <input type="hidden" name="id_tipo" value="<?php echo $row['id_tipo']; ?>"/> 



                        <input type="text" class="form-control" name="nombre_tipo" value="<?php echo $row['nombre_tipo']; ?>" required>                                 



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

 