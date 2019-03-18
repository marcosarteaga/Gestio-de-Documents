function formFichero(id,titulo,nameInput){
	$('#'+id).before($('<h3>', {text: titulo}));
	var elementAnterio = $('#'+id);
	var divPadre = $('<div>').addClass("custom-file");
	var inputFichero = $('<input>').attr('fichero');
	inputFichero.attr('name','nameInput');
	inputFichero.attr('type','file');
	inputFichero.attr('accept','application/pdf');
	inputFichero.addClass('custom-file-input');
	var labelSubmit = $('<label>').addClass('custom-file-label');
	divPadre.append(inputFichero);
	divPadre.append(labelSubmit);
	elementAnterio.append(divPadre);
}