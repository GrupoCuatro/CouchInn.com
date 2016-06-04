<?php
	require('../db/conectar_db.php');   //todo el string de conexion a mysql... me quedo con el handler $db
	$id = $_GET['id'];
	$sql = "SELECT * FROM `ciudades` WHERE `id_provincia` LIKE '".$id."'";
	
	$res = mysqli_query($conexion,$sql);
	while($row = mysqli_fetch_assoc($res)){ ?>
		<option class="form-control" value="<?php echo $row['id_ciudad'];?>"><?php echo $row['nombre_ciudad'];?></option>
<?php } ?>