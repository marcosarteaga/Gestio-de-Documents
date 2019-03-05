function newlist(arrayDatos,type) {
    if(type=="Clientes"){
        for (var i = 0; i< arrayDatos.length; i++) {
            //console.log(arrayDatos[i]);
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
            
        }
    }
}
function error(type,text) {
    //console.log(type+" "+text);
    $("#error").append($("<div>").attr("style","position:absolute; left:0;").attr("class","globalError").text(text));
}