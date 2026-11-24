document.addEventListener('DOMContentLoaded', () => {
    console.log('[200 OK] Recurso script.js cargado correctamente desde Apache.');

    const indicador = document.getElementById('estado-recursos');
    if (indicador) {
        indicador.textContent = 'Estado de recursos estáticos: CSS y JS cargados correctamente (HTTP 200 OK).';
    }

    // Validación básica del formulario POST
    const formPost = document.getElementById('form-post');
    if (formPost) {
        formPost.addEventListener('submit', (e) => {
            const nombre = document.getElementById('nombre').value.trim();
            const email = document.getElementById('email').value.trim();
            const mensaje = document.getElementById('mensaje').value.trim();

            if (!nombre || !email || !mensaje) {
                e.preventDefault();
                alert('Por favor completa todos los campos antes de enviar la petición POST.');
            }
        });
    }

    // Validación básica del formulario GET
    const formGet = document.getElementById('form-get');
    if (formGet) {
        formGet.addEventListener('submit', (e) => {
            const termino = document.getElementById('q').value.trim();
            if (!termino) {
                e.preventDefault();
                alert('Escribe un término para realizar la consulta GET.');
            }
        });
    }
});