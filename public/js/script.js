const form = document.getElementById('formulario');

form.addEventListener('submit', ()=>{
    
    // Desactivar los campos del formulario
    const inputs = document.querySelectorAll('#formulario input');
    const textArea = document.getElementById('comentario');
    const boton = document.getElementById('boton');
    inputs.forEach(input => input.disabled = true);
    textArea.disabled = true;
    boton.disabled = true;
    // Obtener el nombre del usuario
    const nombre = document.getElementById('nombre').value;
    console.log(nombre);
    // Mostrar el mensaje de registro
     // Crear dinámicamente el elemento <p> y añadir el mensaje
     const contenedor = document.getElementById('mensaje');
     const mensaje = document.createElement('p');
     mensaje.textContent = `El usuario ${nombre} se registró correctamente.`;
     contenedor.appendChild(mensaje);
    

    // Redirigir a otra ruta después de 3 segundos
    setTimeout(() => {
        mensaje.remove();
        
    }, 3000); // Espera 3 segundos antes de redirigir
});