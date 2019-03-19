var errores = 0;
//Expresiones regulares.
var logicaTelefono = "^[0-9]{9}$";
var logicaMail ="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$";
var logicaVacio = "^[^]+$";
var logicaNIF = "^\d{8}[a-zA-Z]{1}$";
var logicaCIF = "^[a-zA-Z]{1}\d{7}[a-zA-Z0-9]{1}$";
var logicaNIE = "^[XxTtYyZz]{1}[0-9]{7}[a-zA-Z]{1}$";

//Arrays de informacion interna
var mensajesError = [];
var inputNames = [];
/**
 * Pasamos el array de datos + el tipo de array(Clientes o ventas)
 * @param {array} arrayDatos 
 * @param {String} type 
 */
function newlist(arrayDatos,type) {
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
                        $("<a>").attr("href","detalle/cliente/"+arrayDatos[i]["id"]).append(arrayDatos[i]["Localidad"])
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
    if(type=="Ventas"){

    }
}
//Añadimos al carrgar la pagina el onClick en el boton submit. 
window.onload = function(){
    onClickForm("form");
    $("#error").hide();//escondemos el div de errores.
}
/**
 * funcion añadir borde rojo mediante classe de boostrap en los inputs
 * @param {*} idForm 
 * @param {*} idInput 
 */
function addBorderError(idForm,idInput) {
    $(idForm+" "+idInput).addClass("border border-danger errores");
}
/**
 * funcion quitar borde mediante classe de bostrap en los inputs
 * @param {*} idForm 
 * @param {*} idInput 
 */
function removeBorderError(idForm,idInput) {
    $(idForm+" "+idInput).removeClass("border border-danger errores");
}
/**
 * funcion para saber si es correcto el valor en el input.
 * @param {*} idInput 
 * @param {*} logica 
 * @param {*} idForm 
 */
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
/**
 * Añade al boton con id sub un onclick y lanza una funcion con el id del form.
 * @param {*} idForm 
 */
function onClickForm(idForm) {
    $("#sub").click(function () {
        checkForm(idForm);
        return false;
    });
}
/**
 * Generamos los mensages de error para el elemento error en funcion del Name en el input
 * @param {*} array 
 */
function createErrorMessage(array){
	$.each(array, function( index, value ) {
  		if (value == "Nom"){
  			mensajesError.push("El campo nombre es incorrecto. Debe contener un minimo de 3 letras y un maximo de 30.")
          }
        if (value == "Cognom"){
            mensajesError.push("El campo apellido es incorrecto. Debe contener un minimo de 3 letras y un maximo de 30.")
        }
  		if (value == "Provincia"){
  			mensajesError.push("El campo provincia es incorrecto. Debe contener un minimo de 3 letras y un maximo de 30.");
  		}
  		if (value == "Localidad"){
  			mensajesError.push("El campo localidad es incorrecto. Debe contener un minimo de 3 letras y un maximo de 30.");
          }
  		if (value == "Telefon"){
  			mensajesError.push("Telefono incorrecto. Debe contener 9 numeros.");
  		}
  		if (value == "Email"){
  			mensajesError.push("Correo electronico incorrecto.");
          }
  		if (value == "Direccio"){
  			mensajesError.push("El campo direccion no puede estar vacio.");
  		}
  		if (value == "NIF"){
  			mensajesError.push("El campo CIF/NIF es incorrecto");
  		}
  		if (value == "CP"){
  			mensajesError.push("El campo codigo postal no puede estar vacio.");
  		}
      if (value == "nopdf") {
        mensajesError.push("El Fichero no es de tipo PDF.");
      }
	});
}
/**
 * comprovaciones de errores
 * @param {*} idForm 
 */
function checkForm(idForm) {
    errores = 0;
    checkLabel("#inputTel",logicaTelefono,idForm);
    checkLabel("#inputEmail",logicaMail,idForm);
    checkLabel("#inputLoc",logicaVacio,idForm);
    checkLabel("#inputNombre",logicaVacio,idForm);
    checkLabel("#inputApellidos",logicaVacio,idForm);
    checkLabel("#inputPro",logicaVacio,idForm);
    checkLabel("#inputDir",logicaVacio,idForm);
    CheckNifCif("#inputNif",idForm);
    
    if(errores===0){
        submit();
    }else{
        recogerErrores();
        createErrorMessage(inputNames);
        MostrarError(mensajesError);
        inputNames.length = 0;
        mensajesError.length = 0;

    }

}
/**
 * Todos los inputs con la class error son guardados en un array
 */
function recogerErrores() {
    $("input.errores").each(function(){
        var inputError = $(this).attr("name");
        inputNames.push(inputError);
    });
}
/**
 * Cambiar a array y rellenar el error con el array de errores
 * @param {Array} arrayText 
 */
function MostrarError(arrayText) {//   
    //Borramos el contenido del div
    $("#error").empty();
    //Añadimos el boton para cerrar el div
    $("#error").append(
        $("<button>").addClass("btn btn-secondary CloseError").attr("onClick","BorrarDivError();").text("x"));
    $("#error").append($("<ol>").addClass("listaErrores"));
    $.each(arrayText,function(index,value){
        $(".listaErrores").append($("<ul>").text(value));
    });
    $("#error").show();
    
    
}
/**
 * Escondes el div de los errores
 */
function BorrarDivError() {
    $("#error").hide();
}



function detalles(Consulta,elementoAnteriorId){
  if (Consulta.length>=1) {
    var elementoAnterior = $("#"+elementoAnteriorId);
  console.log(elementoAnterior);
  var tabla = $("<table>").addClass("table");
  var th = $('<thead>');
  var trtitulos =$('<tr>').addClass("thead-dark");

  var tdid = $('<th>',{text: "ID"});
  var tdnombre = $('<th>',{text:"Nombre"});
  var tdfmodi = $('<th>',{text:"Fecha Modificacion"});

  trtitulos.append(tdid);
  trtitulos.append(tdnombre);
  trtitulos.append(tdfmodi);
  th.append(trtitulos);
  tabla.append(trtitulos);

  

  for(var datos in Consulta){
    var trdetalles =$('<tr>');
    var Claves = Object.keys(Consulta[datos]);
    var Valores = Object.values(Consulta[datos]);
    for(var key in Claves){
      var titulo = Claves[key];
      if (titulo=="nombreVentas") {
        var ahred = $('<a>',{text:Valores[key],href:"http://127.0.0.1:8000/detalle/venta/"+Consulta[datos]["id"]}); 
        var td = $('<td>');
        td.append(ahred);
        trdetalles.append(td);
      }
      else{
        var td = $('<td>').text(Valores[key]);
        trdetalles.append(td);
      }
      
    }
    
    
    tabla.append(trdetalles); 
  }
  
  elementoAnterior.after(tabla);
  }
}


/* DetallesFichero printamos los ficheros pdf de cada venta con los iconos de modificar,visualizar y descargar */

function detallesFichero(Consulta,elementoAnteriorId){  
  if (Consulta.length>=1) {
  var elementoAnterior = $("#"+elementoAnteriorId);
  var tabla = $("<table>").addClass("table");
  tabla.attr({'style':'margin-left:30px;'});
  var th = $('<thead>');
  var trtitulos =$('<tr>');

  var tdid = $('<th>',{text: "ID"});
  var tdnombre = $('<th>',{text:"Nombre"});
  var tdfmodi = $('<th>',{text:"Fecha Modificacion"});

  trtitulos.append(tdid);
  trtitulos.append(tdnombre);
  trtitulos.append(tdfmodi);
  th.append(trtitulos);
  tabla.append(trtitulos);

  

  for(var datos in Consulta){
    var trdetalles =$('<tr>');
    var Claves = Object.keys(Consulta[datos]);
    var Valores = Object.values(Consulta[datos]);
    for(var key in Claves){
      var titulo = Claves[key];
      if (titulo=="") {
        var ahred = $('<a>',{text:Valores[key],href:"http://127.0.0.1:8000/detalle/venta/"+Consulta[datos]["id"]}); 
        var td = $('<td>');
        td.append(ahred);
        trdetalles.append(td);
      }
      else{
        var td = $('<td>').text(Valores[key]);
        trdetalles.append(td);
      }
      
    }
    var modi = $('<a>',{text:'modificar',href:"http://127.0.0.1:8000/detalle/modificarFichero/"+Consulta[datos]["id"]});
    var lupa = $('<a>',{text:'lupa',href:"http://127.0.0.1:8000/storage/"+Consulta[datos]["archivo"]});
    lupa.attr("target","_blank");
    var descargar = $('<a>',{text:'descargar' });
    descargar.attr("href","/documento/"+Consulta[datos]["archivo"]);
    
    var td = $('<td>');
    var td2 = $('<td>');
    var td3 = $('<td>');
    td.append(modi);
    td2.append(lupa);
    td3.append(descargar);
    trdetalles.append(td);
    trdetalles.append(td2);
    trdetalles.append(td3);
    tabla.append(trdetalles); 
  }
  
  elementoAnterior.after(tabla);
  }
}