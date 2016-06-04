<script type="text/javascript" src="../js/actualizar.js"></script>
<section>
      <div class="col-lg-8 col-md-8 col-xs-10 col-md-offset-2 col-lg-offset-2 col-xs-offset-1 " style="margin-bottom: 10%;"> 
<?php	
	

	$strQuery = "SELECT * FROM `paises` WHERE 1";
	
	$query = mysqli_query($conexion,$strQuery); ?>
	
	
				<select class="form-control" onFocus="recargarS2(this.value)" onChange="recargarS2(this.value)" name="paises" onBlur="recargarS2(this.value)">
    
<?php 	while($row = mysqli_fetch_array($query)){ ?>
                
                	<option class="form-control"  value="<?php echo $row['id_pais']; ?>"><?php echo $row['nombre_pais']; ?></option>   
           <?php } ?>  
                    
                                    
               	</select>   
                
                <select class="form-control" id="s2" name="provincias" onFocus="recargarS3(this.value)" onChange="recargarS3(this.value)" onBlur="recargarS3(this.value)" > </select>
                
                <select class="form-control" id="s3" name="ciudades"> </select>
            </div>                			
        </section>
        
        
        


  