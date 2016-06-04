function validarAltaPremium(formulario) {

	var nombre = formulario.nombre.value;
	var documento = formulario.documento.value;
	var numeros = formulario.numeros.value;
	var vencimiento = formulario.vencimiento.value;
	var codigo = formulario.codigo.value;

	if (nombre == null || nombre.length == 0 || /^\s+$/.test(nombre)) {
		$('#alertModalRegPremiumTitularTarjeta').modal();
		return false;
	}

	if (documento == null || documento.length == 0 || /^\s+$/.test(documento)) {
		$('#alertModalRegPremiumDocumentoTarjeta').modal();
		return false;
	}

	if (documento.length < 7) {
		$('#alertModalRegPremiumDocumentoTarjetaCorto').modal();
		return false;
	}

	if (numeros == null || numeros.length == 0 || /^\s+$/.test(numeros)) {
		$('#alertModalRegPremiumNumeros').modal();
		return false;
	}

	if (numeros.length != 16) {
		$('#alertModalRegPremiumNumerosCorto').modal();
		return false;
	}

	if (vencimiento == null || vencimiento.length == 0 || /^\s+$/.test(vencimiento)) {
		$('#alertModalRegPremiumVencimiento').modal();
		return false;
	}

	if (vencimiento.length != 4) {
		$('#alertModalRegPremiumVencimientoCorto').modal();
		return false;
	}

	if (codigo == null || codigo.length == 0 || /^\s+$/.test(codigo)) {
		$('#alertModalRegPremiumCodigo').modal();
		return false;
	}

	if (codigo.length != 3) {
		$('#alertModalRegPremiumCodigoCorto').modal();
		return false;
	}

	return true;
	
}