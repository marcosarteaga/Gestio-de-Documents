function modificar(){
	var trPadre = $("#detalles").children('td').children('input');
	var trPadre2 = $("#detalles2").children('td').children('input');
	var trPadre3 = $("#detalles3").children('td').children('input');
	trPadre.prop('disabled', false);
	trPadre2.prop('disabled', false);
	trPadre3.prop('disabled', false);


	/*
	for (var i = 0; i < trPadre.length; i++) {
		var nom = trPadre[i].name;
		console.log(trPadre[i]);
		if (nom == "nom" && nom == "Cognom" && nom == "nif") {
			trPadre[i].prop('disabled', true);
		}else{
			trPadre[i].prop('disabled', false);
		}
	}

	for (var i = 0; i < trPadre2.length; i++) {
		var nom2 = trPadre2[i].name;
		console.log(trPadre2[i]);
		if (nom2 == "nom" && nom2 == "Cognom" && nom2 == "nif") {
			trPadre2[i].prop('disabled', true);
		}else{
			trPadre2[i].prop('disabled', false);
		}
	}
	*/

}