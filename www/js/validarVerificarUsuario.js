function validarVerificarUsuario(formulario) {

	var imagenDNI = formulario.imagenDNI.value;
	var imagenServicio = formulario.imagenServicio.value;

	var extensionesOk = new Array (".jpg", ".png", ".gif", ".pdf");
	var extension = "someone";
	var permitida = false;


	if (!(formulario.imagenDNI.value == "")) {
		extension = (formulario.imagenDNI.value.substring(formulario.imagenDNI.value.lastIndexOf("."))).toLowerCase();
		permitida = false;
		for (var i = 0; i < extensionesOk.length; i++) {
			if (extensionesOk[i] == extension) { permitida = true; }
		}
		if (!permitida) {
			$('#alertModalAltaPublicacionDIExtensionVerificarUsuarioImagenErronea').modal();
			return false;
		}
	} else {
		$('#alertModalAltaPublicacionDIExtensionVerificarUsuarioImagenAusente').modal();
		return false;
	}

	if (!(formulario.imagenServicio.value == "")) {
		extension = (formulario.imagenServicio.value.substring(formulario.imagenServicio.value.lastIndexOf("."))).toLowerCase();
		permitida = false;
		for (var i = 0; i < extensionesOk.length; i++) {
			if (extensionesOk[i] == extension) { permitida = true; }
		}
		if (!permitida) {
			$('#alertModalAltaPublicacionDIExtensionVerificarUsuarioImagenErronea').modal();
			return false;
		}
	} else {
		$('#alertModalAltaPublicacionDIExtensionVerificarUsuarioImagenAusente').modal();
		return false;
	}

	if ( (!(formulario.imagenDNI.value == "")) && (!(formulario.imagenServicio.value == "")) ) {
		if (formulario.imagenDNI.value == formulario.imagenServicio.value) {
			$('#alertModalAltaPublicacionDIExtensionVerificarUsuarioArchivosIguales').modal();
			return false;
		}
	}

	return true;
}