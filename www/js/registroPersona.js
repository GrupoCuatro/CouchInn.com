function registroPersona(formulario) {
			formulario.cuil.disabled = true;
			formulario.cuil.value = "";
			if(formulario.dni.disabled){formulario.dni.disabled = false;}
			if(formulario.apellido.disabled){formulario.apellido.disabled = false;}
}
	 