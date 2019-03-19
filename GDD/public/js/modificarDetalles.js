function modificar(){
	var trPadre = $("#detalles").children('td').children('input');
	var trPadre2 = $("#detalles2").children('td').children('input');
	var trPadre3 = $("#detalles3").children('td').children('input');
	trPadre.prop('disabled', false);
	trPadre2.prop('disabled', false);
	trPadre3.prop('disabled', false);
	var btnActualizar = $("#actualizar");
	btnActualizar.prop('disabled', false);
}



