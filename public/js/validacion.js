document.getElementById('registroForm').addEventListener('submit', function (e) {
    e.preventDefault();  // Evita el envío del formulario mientras validamos

    // Obtener valores de los campos
    const nombre = document.getElementById('nombre').value.trim();
    const correo = document.getElementById('correo').value.trim();
    const telefono = document.getElementById('telefono').value.trim();
    const contraseña = document.getElementById('contraseña').value.trim();
    const confirmarContraseña = document.getElementById('confirmarContraseña').value.trim();
    const edad = document.getElementById('edad').value.trim();
    const direccion = document.getElementById('direccion').value.trim();
    const ciudad = document.getElementById('ciudad').value.trim();
    const pais = document.getElementById('pais').value.trim();
    const codigo_postal = document.getElementById('codigo_postal').value.trim();

    // Validación de nombre
    if (nombre === '') {
        Swal.fire('Error', 'El nombre es obligatorio', 'error');
        return;
    }

    // Validación de correo
    const correoRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!correoRegex.test(correo)) {
        Swal.fire('Error', 'El correo no es válido', 'error');
        return;
    }

    // Validación de teléfono (opcional)
    const telefonoRegex = /^[0-9]{9}$/;
    if (!telefonoRegex.test(telefono)) {
        Swal.fire('Error', 'El teléfono debe tener 9 dígitos', 'error');
        return;
    }

    // Validación de contraseñas
    if (contraseña !== confirmarContraseña) {
        Swal.fire('Error', 'Las contraseñas no coinciden', 'error');
        return;
    }

    if (contraseña.length < 6) {
        Swal.fire('Error', 'La contraseña debe tener al menos 6 caracteres', 'error');
        return;
    }

    // Validación de edad
    if (isNaN(edad) || edad < 18) {
        Swal.fire('Error', 'Debes tener al menos 18 años', 'error');
        return;
    }

    // Validación de código postal
    const codigoPostalRegex = /^[0-9]{5}$/;
    if (!codigoPostalRegex.test(codigo_postal)) {
        Swal.fire('Error', 'El código postal no es válido', 'error');
        return;
    }

    // Si todo está bien, enviar el formulario
    this.submit();
});
