document.getElementById('miFormulario').addEventListener('submit',function (e){
    e.preventDefault();
    //alert('Datos enviados al Formulario')
    let valid = true; // Variable para controlar si el formulario es válido
    let mensaje = ""; // Mensaje de error

    // Validar música
    const musicaSeleccionada = document.querySelectorAll('input[name="musica[]"]:checked');
    if (musicaSeleccionada.length === 0) {
        mensaje += "Por favor, seleccione al menos un género musical.\n";
        valid = false; // Marcar como no válido
    }

    // Validar nombre
    const nameInput = document.getElementById("name");
    const nombre = nameInput.value.trim(); // Obtener el valor y eliminar espacios

    if (!nombre) {
        mensaje += "Por favor, ingrese su nombre.\n"; // Agregar mensaje personalizado
        valid = false; // Marcar como no válido
    }

    //aqui puedes hacer validaciones adicionales se lo deseas
    if (!valid) {
        Swal.fire({
            title: 'Error',
            text: mensaje,
            icon: 'error',
            confirmButtonText: 'Aceptar'
        });
    } else {
        // Si el formulario es válido, preguntar al usuario si desea enviar
        Swal.fire({
            title: "¿Estás seguro?",
            text: "¿Quieres enviar este formulario?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Si, enviar',
            cancelButtonText: 'No, cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Si el usuario confirma, se envía el formulario
                this.submit();
            }
        });
    }
});