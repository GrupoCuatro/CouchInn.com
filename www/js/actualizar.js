function recargarS2(val){
 
   //esperando la carga...
   $('#s2').html('<option class="form-control"  value="">Cargando...aguarde</option>');
   //realizo la call via jquery ajax
   $.ajax({
		url: '../secciones/procesa.php',
		data: 'id='+val,
		success: function(resp){
		 $('#s2').html(resp)
		 }
	});
}



function recargarS3(val){
 
   //esperando la carga...
   $('#s3').html('<option class="form-control"  value="">Cargando...aguarde</option>');
   //realizo la call via jquery ajax
   $.ajax({
		url: '../secciones/procesaCiudad.php',
		data: 'id='+val,
		success: function(resp){
		 $('#s3').html(resp)
		 }
	});
}