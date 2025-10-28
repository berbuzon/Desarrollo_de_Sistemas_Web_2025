// funcion para capturar datos en sessionStorage
$(document).ready(function () {
    $('#boton-guardar').click(function () {
        // Capturo los datos de los inputs
        let nom = document.getElementById("nombretxt").value;
        let ape = document.getElementById("apellidotxt").value;
        // Los guardo en sessionStorage
        sessionStorage.setItem("nombre", nom);
        sessionStorage.setItem("apellido", ape);



    });
});

// funcion para mostrar datos de sessionStorage
$('#boton-cargar').click(function () {
    $(document).ready(function () {
        // obtener datos almacenados en sessionStorage
        let nombre = sessionStorage.getItem("nombre");
        let apellido = sessionStorage.getItem("apellido");
        // Mostrarlos en pantalla
        document.getElementById("nombre").innerHTML = nombre;
        document.getElementById("apellido").innerHTML = apellido;
    });
});