function validarTipoHospedaje(formulario) {
			var tipo = formulario.nombre_tipo.value;	
			tipo = tipo.trim();		
			if (tipo == null || tipo.length == 0 || /^\s+$/.test(tipo)) {
				$('#alertModalTipoHospedaje').modal();
				return false;
			}
			if (tipo.length < 4){
				$('#alertModalTipoHospedajeLeng').modal();
				return false;
			}
			return true;		
}