// script.js
// Validación básica del formulario de contacto del proyecto Macario Jiménez

document.addEventListener("DOMContentLoaded", function () {
    const formulario = document.getElementById("formContacto");

    if (formulario) {
        formulario.addEventListener("submit", function (e) {
            const nombre = document.getElementById("nombre").value.trim();
            const correo = document.getElementById("correo").value.trim();
            const telefono = document.getElementById("telefono").value.trim();
            const mensaje = document.getElementById("mensaje").value.trim();

            if (nombre === "" || correo === "" || mensaje === "") {
                alert("Por favor llena los campos obligatorios.");
                e.preventDefault();
                return;
            }

            if (!correo.includes("@") || !correo.includes(".")) {
                alert("Ingresa un correo válido.");
                e.preventDefault();
                return;
            }

            if (mensaje.length < 10) {
                alert("El mensaje debe tener mínimo 10 caracteres.");
                e.preventDefault();
                return;
            }

            if (telefono !== "" && telefono.length < 8) {
                alert("El teléfono debe tener al menos 8 caracteres.");
                e.preventDefault();
                return;
            }
        });
    }
});