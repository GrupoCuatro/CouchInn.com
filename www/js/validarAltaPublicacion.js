function validarAltaPublicacion(formulario) {

			var titulo = formulario.titulo.value;
			var descripcion = formulario.descripcion.value;
			var capacidad = formulario.capacidad.value;
			var di1 = formulario.descripcionimagen1.value;
			if(document.getElementById("premium")){	var di2 = formulario.descripcionimagen2.value;
														var di3 = formulario.descripcionimagen3.value;
														var di4 = formulario.descripcionimagen4.value;
														var di5 = formulario.descripcionimagen5.value;
													}
			var convivencia = formulario.convivencia.value;
			var extensionesOk = new Array (".jpg", ".png", ".gif");
			var extension = "someone";
			var permitida = false;


			if (titulo == null || titulo.length == 0 || /^\s+$/.test(titulo)) {
				$('#alertModalAltaPublicacionTitulo').modal();
				return false;
			}

			if (titulo.length < 10) {
				$('#alertModalAltaPublicacionTituloCorto').modal();
				return false;
			}

			if (descripcion == null || descripcion.length == 0 || /^\s+$/.test(descripcion)) {
				$('#alertModalAltaPublicacionDescripcion').modal();
				return false;
			}

			if (descripcion.length < 30) {
				$('#alertModalAltaPublicacionDescripcionCorto').modal();
				return false;
			}

			if (capacidad == null || capacidad.length == 0 || /^\s+$/.test(capacidad)) {
				$('#alertModalAltaPublicacionCapacidad').modal();
				return false;
			}

			if (di1 == null || di1.length == 0 || /^\s+$/.test(di1)) {
				$('#alertModalAltaPublicacionDI').modal();
				return false;
			}

			if (di1.length < 5) {
				$('#alertModalAltaPublicacionDICorto').modal();
				return false;
			}

			if (formulario.imagen1.value == "" && (!(di1 == null || di1.length == 0 || /^\s+$/.test(di1)))) {
				$('#alertModalAltaPublicacionDISinImagen').modal();
				return false;
			}

			if (!(formulario.imagen1.value == "")) {
				extension = (formulario.imagen1.value.substring(formulario.imagen1.value.lastIndexOf("."))).toLowerCase();
				permitida = false;
				for (var i = 0; i < extensionesOk.length; i++) {
					if (extensionesOk[i] == extension) { permitida = true; }
				}
				if (!permitida) {
					$('#alertModalAltaPublicacionDIExtensionImagenErronea').modal();
					return false;
				}
			}

			if (document.getElementById("premium")){

				if (!(formulario.imagen2.value == "")) {

					extension = (formulario.imagen2.value.substring(formulario.imagen2.value.lastIndexOf("."))).toLowerCase();
					permitida = false;
					for (var i = 0; i < extensionesOk.length; i++) {
						if (extensionesOk[i] == extension) { permitida = true; }
					}
					if (!permitida) {
						$('#alertModalAltaPublicacionDIExtensionImagenErronea').modal();
						return false;
					}

					if (di2 == null || di2.length == 0 || /^\s+$/.test(di2)) {
						$('#alertModalAltaPublicacionDI').modal();
						return false;
					}
					if (di2.length < 5) {
						$('#alertModalAltaPublicacionDICorto').modal();
						return false;
					}
				} else {
					if (!(di2 == null || di2.length == 0 || /^\s+$/.test(di2))) {
						$('#alertModalAltaPublicacionDISinImagen').modal();
						return false;
					}
				}

				if (!formulario.imagen3.value == "") {

					extension = (formulario.imagen3.value.substring(formulario.imagen3.value.lastIndexOf("."))).toLowerCase();
					permitida = false;
					for (var i = 0; i < extensionesOk.length; i++) {
						if (extensionesOk[i] == extension) { permitida = true; }
					}
					if (!permitida) {
						$('#alertModalAltaPublicacionDIExtensionImagenErronea').modal();
						return false;
					}

					if (di3 == null || di3.length == 0 || /^\s+$/.test(di3)) {
						$('#alertModalAltaPublicacionDI').modal();
						return false;
					}
					if (di3.length < 5) {
						$('#alertModalAltaPublicacionDICorto').modal();
						return false;
					}
				} else {
					if (!(di3 == null || di3.length == 0 || /^\s+$/.test(di3))) {
						$('#alertModalAltaPublicacionDISinImagen').modal();
						return false;
					}
				}

				if (!formulario.imagen4.value == "") {

					extension = (formulario.imagen4.value.substring(formulario.imagen4.value.lastIndexOf("."))).toLowerCase();
					permitida = false;
					for (var i = 0; i < extensionesOk.length; i++) {
						if (extensionesOk[i] == extension) { permitida = true; }
					}
					if (!permitida) {
						$('#alertModalAltaPublicacionDIExtensionImagenErronea').modal();
						return false;
					}

					if (di4 == null || di4.length == 0 || /^\s+$/.test(di4)) {
						$('#alertModalAltaPublicacionDI').modal();
						return false;
					}
					if (di4.length < 5) {
						$('#alertModalAltaPublicacionDICorto').modal();
						return false;
					}
				} else {
					if (!(di4 == null || di4.length == 0 || /^\s+$/.test(di4))) {
						$('#alertModalAltaPublicacionDISinImagen').modal();
						return false;
					}
				}

				if (!formulario.imagen5.value == "") {

					extension = (formulario.imagen5.value.substring(formulario.imagen5.value.lastIndexOf("."))).toLowerCase();
					permitida = false;
					for (var i = 0; i < extensionesOk.length; i++) {
						if (extensionesOk[i] == extension) { permitida = true; }
					}
					if (!permitida) {
						$('#alertModalAltaPublicacionDIExtensionImagenErronea').modal();
						return false;
					}
					
					if (di5 == null || di5.length == 0 || /^\s+$/.test(di5)) {
						$('#alertModalAltaPublicacionDI').modal();
						return false;
					}
					if (di5.length < 5) {
						$('#alertModalAltaPublicacionDICorto').modal();
						return false;
					}
				} else {
					if (!(di5 == null || di5.length == 0 || /^\s+$/.test(di5))) {
						$('#alertModalAltaPublicacionDISinImagen').modal();
						return false;
					}
				}

			}

			if (convivencia == null || convivencia.length == 0 || /^\s+$/.test(convivencia)) {
				$('#alertModalAltaPublicacionConvivencia').modal();
				return false;
			}

			if (convivencia.length < 30) {
				$('#alertModalAltaPublicacionConvivenciaCorta').modal();
				return false;
			}

			return true;



}




