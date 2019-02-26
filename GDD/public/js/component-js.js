function newlist(arrayDatos,type) {
    if(type=="Clientes"){
        for (var i = 0; i< arrayDatos.length; i++) {
            console.log(arrayDatos[i]);
            $("tbody").append(
                $("<tr>").append(
                    $("<td>").append(
                        $("<a>").attr("href","#").append(arrayDatos[i]["Nom"])
                    ),
                    $("<td>").append(
                        $("<a>").attr("href","#").append(arrayDatos[i]["NIF"])
                    ),
                    $("<td>").append(
                        $("<a>").attr("href","#").append(arrayDatos[i]["CP"])
                    )));
            
        }
    }
}
function error(type,text) {
    console.log(type+" "+text);
    $("body").append($("<div>").attr("style","position:absolute; top:0; left:0;").text(text));
}