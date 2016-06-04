function registroEmpresa(formulario) {
			formulario.apellido.disabled = true;
			formulario.apellido.value = "";
			formulario.dni.disabled = true;
			formulario.dni.value = "";
			if(formulario.cuil.disabled){formulario.cuil.disabled = false;}
} 