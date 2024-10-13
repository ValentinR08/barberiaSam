const form = document.getElementById('formulario');
const boton = document.getElementById('boton');
const contenedor = document.getElementById('mensaje');
const textArea = document.getElementById('comentario');
const inputs = document.querySelectorAll('#formulario input');

form.addEventListener('submit', (e) => {
    e.preventDefault();
    // Desactivar los campos del formulario
    inputs.forEach(input => input.disabled = true);
    textArea.disabled = true;
    boton.disabled = true;
    // Obtener el nombre del usuario
    const nombre = document.getElementById('nombre').value;
    console.log(nombre);
    // Mostrar el mensaje de registro
     // Crear dinámicamente el elemento <p> y añadir el mensaje
     const mensaje = document.createElement('p');
     mensaje.textContent = `El usuario ${nombre} se registró correctamente.`;
     contenedor.appendChild(mensaje);
    
     
    
    setTimeout(() => {
        inputs.forEach(input => input.disabled = false);
        textArea.disabled = false;
        boton.disabled = false;
        mensaje.remove();
        form.submit();
    }, 4000); //se espera 4 segundos para borrar el mensaje
});