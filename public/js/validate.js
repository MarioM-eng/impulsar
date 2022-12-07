$(document).ready(function() {
    $("#elementsForm").validate({
        rules:{
            cc : {
                required: true,
                minlength:8
            },
            name : {
                required: true,
                minlength:3
            },
            password : {
                required: true,
                minlength:5
            }
        },
        messages : {
            cc: {
                required: "Este campo es requerido",
                minlength: "Solo se aceptan mínimo 8 caracteres"
            },
            name: {
                required: "Este campo es requerido",
                minlength: "Solo se aceptan mínimo 3 caracteres"
            },
            password: {
                required: "Este campo es requerido",
                minlength: "Solo se aceptan mínimo 5 caracteres"
            }
        }
    });
});
