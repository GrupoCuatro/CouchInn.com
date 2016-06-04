<script type="text/javascript" src="../js/actualizar.js"></script>

<?php	
	

	$strQuery = "SELECT * FROM `paises` WHERE 1";
	
	$query = mysqli_query($conexion,$strQuery); ?>
	
				<span class="label label-custom-two pull-left">Pa&iacute;s</span> 
				<select class="form-control" onFocus="recargarS2(this.value)" onChange="recargarS2(this.value)" name="paises" onBlur="recargarS2(this.value)">
    
<?php 	while($row = mysqli_fetch_array($query)){ ?>
                
                	<option class="form-control"  value="<?php echo $row['id_pais']; ?>"><?php echo $row['nombre_pais']; ?></option>   
           <?php } ?>  
                    
                                    
               	</select>   
                <span class="label label-custom-two pull-left">Provincia</span> 
                <select class="form-control" id="s2" name="provincias" onFocus="recargarS3(this.value)" onChange="recargarS3(this.value)" onBlur="recargarS3(this.value)" > </select>
                <span class="label label-custom-two pull-left">Ciudad</span> 
                <select class="form-control" id="s3" name="ciudades"> </select>
        
        
        


  