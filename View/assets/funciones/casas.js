document.addEventListener("DOMContentLoaded", function () {
    const idCasa = document.getElementById("IdCasa");
    const precioCasaVista = document.getElementById("PrecioCasaVista");
    const formAlquiler = document.getElementById("formAlquiler");
    const usuarioAlquiler = document.getElementById("UsuarioAlquiler");

    if (idCasa) {
        idCasa.addEventListener("change", function () {
            const opcion = this.options[this.selectedIndex];
            const precio = opcion.getAttribute("data-precio");

            if (precio) {
                precioCasaVista.value = "₡" + parseFloat(precio).toLocaleString("es-CR", {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                });
            } else {
                precioCasaVista.value = "";
            }
        });
    }
});


$(document).ready(function () {

    $("#formAlquiler").validate({
        rules: {
            IdCasa: {
                required: true
            },
            UsuarioAlquiler: {
                required: true
            }
        },
        messages: {
            IdCasa: {
                required: "Campo obligatorio"
            },
            UsuarioAlquiler: {
                required: "Campo obligatorio"
            }
        },
        errorElement: "span",
        errorClass: "text-danger",
        highlight: function (element) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element) {
            $(element).removeClass("is-invalid");
        }
    });
    
    $("#UsuarioAlquiler").on("keypress", function (e) {
        let char = String.fromCharCode(e.which);
        if (!/[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]/.test(char)) {
            return false;
        }
    });

});