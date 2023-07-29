function enviarData() {
    // Obtener los valores de los campos del formulario

    const txtNombres = document.getElementById('txtnombres').value;
    const txtCorreo = document.getElementById('txtcorreo').value;
    const txtCelular = document.getElementById('txtcelular').value;
    const txtMensaje = document.getElementById('txtmensaje').value;

    // Realizar las validaciones
    
    if (txtNombres.trim() === '') {
        // Mostrar SweetAlert de error para el campo Nombres y Apellidos
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Por favor, ingresa tus nombres y apellidos.',
            confirmButtonColor: '#d33',
            confirmButtonText: 'Aceptar'
        });
        return; // Detener el envío de datos ya que la validación falló
    }
    if (txtCorreo.trim() === '') {
        // Mostrar SweetAlert de error para el campo Nombres y Apellidos
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Por favor, ingresa tu correo electronico.',
            confirmButtonColor: '#d33',
            confirmButtonText: 'Aceptar'
        });
        return; // Detener el envío de datos ya que la validación falló
    }
    if (txtCelular.trim() === '') {
        // Mostrar SweetAlert de error para el campo Nombres y Apellidos
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Por favor, ingresa tu celular.',
            confirmButtonColor: '#d33',
            confirmButtonText: 'Aceptar'
        });
        return; // Detener el envío de datos ya que la validación falló
    }
    const data = {
        nombres: txtNombres,
        email: txtCorreo,
        celular: txtCelular,
        mensaje: txtMensaje
    };
    const UrlGoogleSheet="https://script.google.com/macros/s/AKfycbw1pnnkujfXkTsFIcUyAzy9FETUmQIlpFf-02Lz25cdxFCoE4w30jNWuEUaAYIGdOE8/exec?action=addRow";
    fetch(UrlGoogleSheet, {
        mode: 'no-cors',
        redirect: "follow",
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        // Aquí puedes manejar la respuesta del servidor después de enviar los datos
        console.log(data);
        // Mostrar SweetAlert de éxito
        Swal.fire({
            icon: 'success',
            title: '¡Registro exitoso!',
            text: 'Tus datos han sido enviados correctamente.',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then(() => {
            // Una vez que el usuario hace clic en el botón "Aceptar" del SweetAlert, recarga la página
            location.reload();
        });
    })
    .catch(error => {
        // Manejar errores en caso de que la solicitud falle
        //console.error('Error:', error);
        // Mostrar SweetAlert de error
        Swal.fire({
            icon: 'success',
            title: '¡Registro exitoso!',
            text: 'Tus datos han sido enviados correctamente.',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then(() => {
            // Una vez que el usuario hace clic en el botón "Aceptar" del SweetAlert, recarga la página
            location.reload();
        });
    });
}

function soloNumeros(event) {
  // Obtiene el código de la tecla presionada
  var charCode = event.which ? event.which : event.keyCode;
  
  // Permite números (teclas del 0 al 9), la tecla de retroceso (Backspace) y el símbolo '+'
  if (charCode > 31 && (charCode !== 43 && (charCode < 48 || charCode > 57))) {
    return false;
  }
  
  return true;
}


