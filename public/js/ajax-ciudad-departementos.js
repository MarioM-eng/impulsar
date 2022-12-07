$(document).ready(function(){
    $(".page-link").click(function(){
        $.get(".page-link[href]", function(informacion, estado){
            alert("Información: " + informacion + "\nEstado: " + estado);
        });
    });
});
