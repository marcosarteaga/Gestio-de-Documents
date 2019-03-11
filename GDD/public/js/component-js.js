var errores = 0;
var logicaTelefono = "^[0-9]{9}$"
var logicaMail ="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$";
var mensajesError = [];
/**
 * 
 * @param {array} arrayDatos 
 * @param {String} type 
 */
function newlist(arrayDatos,type) {/* Pasamos el array de datos + el tipo de array(Clientes o ventas) */
    /* Comprobamos que tipo es*/
    if(type=="Clientes"){
        /* Recorremos todo el array */
        for (var i = 0; i< arrayDatos.length; i++) {
            //console.log(arrayDatos[i]);
            /* Creamos el elemento de la tabla para mostrar los datos y añadimos el link*/
            $("tbody").append(
                $("<tr>").append(
                    $("<td>").append(
                        $("<a>").attr("href","detalle/cliente/"+arrayDatos[i]["id"]).append(arrayDatos[i]["Nom"])
                    ),
                    $("<td>").append(
                        $("<a>").attr("href","detalle/cliente/"+arrayDatos[i]["id"]).append(arrayDatos[i]["NIF"])
                    ),
                    $("<td>").append(
                        $("<a>").attr("href","detalle/cliente/"+arrayDatos[i]["id"]).append(arrayDatos[i]["CP"])
                    )));
            /*Row link in process*/
            /*$("tbody").append(
                $("<a>").attr("href","detalle/cliente/"+arrayDatos[i]["id"]).append(
                    $("<tr>").append(
                        $("<td>").append(arrayDatos[i]["Nom"]),
                        $("<td>").append(arrayDatos[i]["NIF"]),
                        $("<td>").append(arrayDatos[i]["CP"])
                    )));*/
        }
    }
}
function addBorderError(idForm,idInput) {
    $(idForm+" "+idInput).addClass("border border-danger errores");
}
function removeBorderError(idForm,idInput) {
    $(idForm+" "+idInput).removeClass("border border-danger errores");
}
function checkLabel(idInput,logica,idForm) {
    if ($(idInput).val().match(logica)) {//recojes el value del input y hace el match con la logica que le pasemos
        removeBorderError(idForm,idInput);
        return true;
    }else{
        addBorderError(idForm,idInput);
        errores++;
        return false;
    }
}
function onClickForm(ifForm) {
    $("#sub").click(function () {
        checkForm(idForm);
        return false;
    });
}
function createErrorMessage(array){
	$.each(names, function( index, value ) {
  		/*if (value == "nombre"){
  			mensajesError.push("El campo nombre es incorrecto. Debe contener un minimo de 3 letras y un maximo de 30.")
  		}
  		if (value == "provincia"){
  			mensajesError.push("El campo provincia es incorrecto. Debe contener un minimo de 3 letras y un maximo de 30.");
  		}
  		if (value == "localidad"){
  			mensajesError.push("El campo localidad es incorrecto. Debe contener un minimo de 3 letras y un maximo de 30.");
          }*/
  		if (value == "telefono"){
  			mensajesError.push("Telefono incorrecto. Debe contener 9 numeros.");
  		}
  		if (value == "email"){
  			mensajesError.push("Correo electronico incorrecto.");
          }
          /*
  		if (value == "direccion"){
  			mensajesError.push("El campo direccion no puede estar vacio.");
  		}
  		if (value == "cifNif"){
  			mensajesError.push("El campo CIF/NIF no puede estar vacio.");
  		}
  		if (value == "codigoPostal"){
  			mensajesError.push("El campo codigo postal no puede estar vacio.");
  		}*/
	});
}
function checkForm(idForm) {
    errores = 0;
    //comprovaciones de erroes
    checkLabel("#inputTel",logicaTelefono,idForm);
    checkLabel("#inputEmail",logicaMail,idForm);

    if(errores===0){
        submit();
    }else{

    }

}
/**
 * 
 * @param {Array} arrayText 
 */
function error(arrayText) {//cambiar a array y rellenar el error con el array de errores
    //console.log(type+" "+text);
    $.each(function (index,value) {
        $("#error").append(value);
    });
    
}