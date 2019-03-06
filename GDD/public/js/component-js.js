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
/**
 * 
 * @param {String} type 
 * @param {String} text 
 */
function error(type,text) {
    //console.log(type+" "+text);
    $("#error").append($("<div>").attr("style","position:absolute; left:0;").attr("class","globalError").text(text));
}