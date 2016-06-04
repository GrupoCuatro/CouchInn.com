function validarRegistro(formulario) {



			var nombre = formulario.nombre.value;

			if (!formulario.apellido.disabled){var apellido = formulario.apellido.value;}

			if (!formulario.dni.disabled){var dni = formulario.dni.value;}

			if (!formulario.cuil.disabled){var cuil = formulario.cuil.value;}

			var mail = formulario.mail.value;

			var direccion = formulario.direccion.value;

			var telefono = formulario.telefono.value;

			var usuario = formulario.nombre_usuario.value;

			var contraseña = formulario.password.value;

			var extensionesOk = new Array (".png", ".jpg", ".jpeg", ".bmp", ".gif", ".tiff");
			var extension = "someone";
			var permitida = false;





			if (nombre == null || nombre.length == 0 || /^\s+$/.test(nombre)) {

				$('#alertModalRegNombre').modal();

				return false;

			}



			if (!formulario.apellido.disabled){

				if (apellido == null || apellido.length == 0 || /^\s+$/.test(apellido)) {

					$('#alertModalRegApellido').modal();

					return false;

				}

			}



			if (!formulario.dni.disabled){

				if (dni == null || dni.length == 0 || /^\s+$/.test(dni)) {

					$('#alertModalRegDni').modal();

					return false;

				}

				if (dni.length < 7) {

					$('#alertModalRegDniCorto').modal();

					return false;

				}

			}



			if (!formulario.cuil.disabled){

				if (cuil == null || cuil.length == 0 || /^\s+$/.test(cuil)) {

					$('#alertModalRegCuit').modal();

					return false;

				}

				if (cuil.length < 7) {

					$('#alertModalRegCuilCorto').modal();

					return false;

				}

			}



			if (mail == null || mail.length == 0 || /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/.test(mail)) {

				$('#alertModalRegMail').modal();

				return false;

			}



			if (direccion == null || direccion.length == 0 || /^\s+$/.test(direccion)) {

				$('#alertModalRegDireccion').modal();

				return false;

			}


			if (direccion.length < 5) {

				$('#alertModalRegDireccionCorta').modal();

				return false;

			}


			if (telefono == null || telefono.length == 0 || /^\s+$/.test(telefono)) {

				$('#alertModalRegTelefono').modal();

				return false;

			}


			if (telefono.length < 5) {

				$('#alertModalRegTelefonoCorto').modal();

				return false;

			}


			if (usuario == null || usuario.length == 0 || /^\s+$/.test(usuario)) {				

				$('#alertModalLoginUsuario').modal();

				return false;

			}



			if (contraseña == null || contraseña.length == 0 || /^\s+$/.test(contraseña)) {

				$('#alertModalLoginPassword').modal();

				return false;

			}



			if (contraseña.length < 8) {

				$('#alertModalLoginPasswordCorta').modal();

				return false;

			}

			if (!(formulario.imagen_usuario.value == "")) {
				extension = (formulario.imagen_usuario.value.substring(formulario.imagen_usuario.value.lastIndexOf("."))).toLowerCase();
				permitida = false;
				for (var i = 0; i < extensionesOk.length; i++) {
					if (extensionesOk[i] == extension) { permitida = true; }
				}
				if (!permitida) {
					$('#alertModalAltaPublicacionDIExtensionImagenErroneaRegistrarse').modal();
					return false;
				}
			}



			return true;		


 
}