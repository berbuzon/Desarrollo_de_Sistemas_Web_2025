// funcion para capturar datos en sessionStorage
$(document).ready(function () {
    $('#boton-guardar').click(function () {
        // Capturo los datos de los inputs
        let nom = document.getElementById("nombretxt").value;
        let ape = document.getElementById("apellidotxt").value;
        // Los guardo en sessionStorage
        localStorage.setItem("nombre", nom);
        localStorage.setItem("apellido", ape);

    });
});

// funcion para mostrar datos de sessionStorage
$('#boton-cargar').click(function () {
    $(document).ready(function () {
        // obtener datos almacenados en sessionStorage
        let nombre = localStorage.getItem("nombre");
        let apellido = localStorage.getItem("apellido");
        // Mostrarlos en pantalla
        document.getElementById("nombre").innerHTML = nombre;
        document.getElementById("apellido").innerHTML = apellido;
    });
});

// limpiar localStorage

$(document).ready(function () {
    $('#boton-borrar').click(function () {
        localStorage.clear();
        document.getElementById("nombre").innerHTML = "";
        document.getElementById("apellido").innerHTML = "";
        document.getElementById("nombretxt").value = "";
        document.getElementById("apellidotxt").value = "";
    });
});