<?php
$metodo = $_SERVER['REQUEST_METHOD'];
$nombre = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8') : 'No especificado';
$email = isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8') : 'No especificado';
$mensaje = isset($_POST['mensaje']) ? htmlspecialchars($_POST['mensaje'], ENT_QUOTES, 'UTF-8') : 'No especificado';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Respuesta POST - Servidor Apache</title>
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
      <h1>Datos Recibidos en el Servidor (PHP)</h1>
      <p>Método HTTP utilizado: <strong><?php echo $metodo; ?></strong></p>
      
      <table>
        <thead>
          <tr>
            <th>Campo</th>
            <th>Valor Recibido</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Nombre</strong></td>
            <td><?php echo $nombre; ?></td>
          </tr>
          <tr>
            <td><strong>Email</strong></td>
            <td><?php echo $email; ?></td>
          </tr>
          <tr>
            <td><strong>Mensaje</strong></td>
            <td><?php echo $mensaje; ?></td>
          </tr>
        </tbody>
      </table>

      <br>
      <a href="formulario.html"><button type="button">Volver al formulario</button></a>
    </section>
  </main>
</body>
</html>