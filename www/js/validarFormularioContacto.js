function validarFormularioContacto(formulario, ok) {


			var nombre = formulario.nombre_contacto.value;

			if(ok) {var apellido = formulario.apellido_contacto.value;}

			var mail = formulario.mail_contacto.value;

			var asunto = formulario.asunto_contacto.value;

			var mensaje = formulario.mensaje_contacto.value;




			if (nombre == null || nombre.length == 0 || /^\s+$/.test(nombre)) {

				$('#alertModalRegNombre').modal();

				return false;

			}


			if (ok) {

				if (apellido == null || apellido.length == 0 || /^\s+$/.test(apellido)) {

					$('#alertModalRegApellido').modal();

					return false;

				}

			}


			if (mail == null || mail.length == 0 || /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/.test(mail)) {

				$('#alertModalRegMail').modal();

				return false;

			}



			if (asunto == null || asunto.length == 0 || /^\s+$/.test(asunto)) {

				$('#alertModalContactoAsunto').modal();

				return false;

			}



			if (asunto.length < 4) {

				$('#alertModalContactoAsuntoLeng').modal();

				return false;

			}



			if (mensaje == null || mensaje.length == 0 || /^\s+$/.test(mensaje)) {

				$('#alertModalContactoMensaje').modal();

				return false;

			}



			if (mensaje.length < 10) {				

				$('#alertModalContactoMensajeLeng').modal();

				return false;

			}



			return true;		



}