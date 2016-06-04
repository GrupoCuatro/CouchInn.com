function validarLogin(formulario) {

			var usuario = formulario.nombre_usuario.value;
			usuario = usuario.trim();
			var contraseña = formulario.password_usuario.value;
			contraseña = contraseña.trim();
			
			if (usuario == null || usuario.length == 0 || /^\s+$/.test(usuario)) {

				$('#alertModalLoginUsuario').modal();

				return false;

			}

			if (contraseña == null || contraseña.length == 0 || /^\s+$/.test(contraseña)) {

				$('#alertModalLoginPassword').modal();

				return false;

			}



			if (contraseña.length < 8){

				$('#alertModalLoginPasswordCorta').modal();

				return false;

			}



			return true;		

}