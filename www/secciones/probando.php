<section>
	<div class="col-lg-6 col-md-8 col-xs-10 col-md-offset-2 col-lg-offset-3 col-xs-offset-1 " style="margin-bottom: 210px;">		           
			            
            <div class="panel panel-success">
                  <div class="panel-heading">                  	
                    <h2 class="panel-title text-center"><?php echo "De: ".$row['nombre_contacto']." ".$row['apellido_contacto']; ?></h2>
                  </div>
                  <div class="panel-body">  
                  		<?php 
							$date = date_create($row['fecha_contacto']);
							echo "<span class='label label-info text-right' style='font-size:14px'><strong>".date_format($date, 'd-m-Y H:i')."</strong></span>"; ?>
							</br>                      
      						<span class="label label-info" style="font-size:16px" ><?php echo "Asunto: ".$row['asunto_contacto'] ?></span>                              
                  </div>    
                  
                  <div class="panel-footer">
                   <center>
                   	   <div class="form-group">	
                            <label><button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#modalVerMensaje<?php echo $row['id_contacto']; ?>" style="width:100px" >Ver mensaje</button></label>                            
                            <button class="btn btn-success btn-md" title="Volver" onClick="javascript: history.back()">Volver</button> 
                       </div>
                     </center>  
                   </div>                       
          </div>            
	</div>
 </section>