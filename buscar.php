<?php
$metodo = $_SERVER['REQUEST_METHOD'];
$termino = isset($_GET['q']) ? htmlspecialchars($_GET['q'], ENT_QUOTES, 'UTF-8') : '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultados GET - Servidor Apache</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
    <img src="images/logo.svg" alt="Logo Laboratorio Redes">
    <nav>
      <ul>
        <li><a href="index.html">Inicio</a></li>
        <li><a href="servicios.html">Servicios y Protocolos</a></li>
        <li><a href="formulario.html">Pruebas GET / POST</a></li>
      </ul>
    </nav>
  </header>

  <main class="contenedor">
    <section class="tarjeta">
      <h1>Resultados de Búsqueda (Método GET)</h1>
      <p>Método HTTP: <strong><?php echo $metodo; ?></strong> | Parámetro en URL: <code>?q=<?php echo $termino; ?></code></p>
      
      <div class="card-item">
        <h3>Consulta procesada correctamente</h3>
        <p>El servidor recibió el término: <strong>"<?php echo $termino; ?>"</strong> a través de la cadena de consulta (Query String) de la petición HTTP GET.</p>
      </div>

      <br>
      <a href="formulario.html"><button type="button" class="btn-secundario">Realizar otra búsqueda</button></a>
    </section>
  </main>
</body>
</html>