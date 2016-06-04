<!-- Ventana para editar un tipo de hospedaje -->

<script type="text/javascript" src="../js/validarTipoHospedaje.js"></script>



    <div id="agregarTipoHospedajeModal" class="modal fade" role="dialog">



        <div class="modal-dialog">



            <div class="modal-content">



            <form name="formulariotipohospedaje" id="role-form"  method="post" action="../layout/index.php?seccion=tiposHospedaje" onsubmit="return validarTipoHospedaje(this)">



                <div class="modal-header">



                    <button type="button" class="close" data-dismiss="modal" title="Cerrar">&times;</button>



        			</br>



                    <div class="form-group col-md-12">



                    	</br></br></br>



                        <center>



                          <h3 class="modal-title">Agregar tipo de hospedaje:</h4> 



                        </center>                 



                    </div>



                </div>



                <div class="modal-body">    



                    <div class="form-group col-md-12">                       



                        <input type="text" class="form-control" name="nombre_tipo" placeholder="Al menos 4 caracteres" autofocus required>                                 



                    </div>



        



                    <div class="clearfix"></div>



                </div>



                </br>



                <div class="modal-footer">    



                    <button type="submit" class="btn btn-success" name="Agregar" title="Agregar tipo nuevo" style="width:100px" >Agregar</button>



                    <button type="button" class="btn btn-danger" data-dismiss="modal" title="Cerrar" style="width:100px">Cancelar</button>    



                </div>



            </form>



            </div>



        </div>



    </div>	