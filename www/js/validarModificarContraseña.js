function validarModificacion(formulario) {

			var actual = formulario.password_actual.value;

			var nueva = formulario.password_nueva.value;

			var confirmar = formulario.confirmar_password.value;



			if (actual == null || actual.length == 0 || /^\s+$/.test(actual)) {

				$('#alertModalConfirmarPassword').modal();

				return false;

			}



			if (actual.length < 8){

				$('#alertModalConfirmarPasswordLeng').modal();

				return false;

			}



			if (nueva == null || nueva.length == 0 || /^\s+$/.test(nueva)) {

				$('#alertModalConfirmarNueva').modal();

				return false;

			}



			if (nueva.length < 8){

				$('#alertModalConfirmarNuevaLeng').modal();

				return false;

			}



			if (confirmar == null || confirmar.length == 0 || /^\s+$/.test(confirmar)) {

				$('#alertModalConfirmarConfirmar').modal();

				return false;

			}



			if (confirmar.length < 8){

				$('#alertModalConfirmarConfirmarLeng').modal();

				return false;

			}

			if (actual == nueva) {

				$('#alertModalActualNuevaIguales').modal();

				return false;
			}

			if(!(nueva == confirmar)) {

				$('#alertModalNuevaConfirmacionDistintas').modal();

				return false;
			}



			return true;		



}