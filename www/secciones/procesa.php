<?php
	require('../db/conectar_db.php');   //todo el string de conexion a mysql... me quedo con el handler $db
	$id = $_GET['id'];
	$sql = "SELECT * FROM `provincias` WHERE `id_pais` LIKE '".$id."'";
	$_SESSION['sistema_usuario']['CONSULTAAAA'] = $sql;
	$res = mysqli_query($conexion,$sql);
	while($row = mysqli_fetch_assoc($res)){ ?>
		<option class="form-control" value="<?php echo $row['id_provincia'];?>"><?php echo $row['nombre_provincia'];?></option>
<?php } ?>