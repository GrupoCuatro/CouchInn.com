function validarModificacion(formulario) {
			var mail = formulario.mail.value;
			var direccion = formulario.direccion.value;
			var telefono = formulario.telefono.value;

			if (mail == null || mail.length == 0 || /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/.test(mail)) {
				$('#alertModalRegMail').modal();
				return false;
			}

			if (direccion == null || direccion.length == 0 || /^\s+$/.test(direccion)) {
				$('#alertModalRegDireccion').modal();
				return false;
			}

			if (direccion.length < 5){
				$('#alertModalRegDireccionCorta').modal();
				return false;
			}

			if (telefono == null || telefono.length == 0 || /^\s+$/.test(telefono)) {
				$('#alertModalRegTelefono').modal();
				return false;
			}

			if (telefono.length < 5){
				$('#alertModalRegTelefonoCorto').modal();
				return false;
			}

			return true;		

}