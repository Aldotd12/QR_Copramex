<!DOCTYPE html>
<html>
<head>
    <title>Confirmación de Registro</title>
    <link rel="stylesheet" href="styleconfirmacion.css">
</head>
<body>
<img src="./recursos/logo400d.png" alt="Descripción de la imagen" class="imagen-derecha">

<?php

if(isset($_GET['nombre']) && isset($_GET['correo']) && isset($_GET['empresa']) && isset($_GET['fecha']) && isset($_GET['qr'])) {
    
    $nombre = $_GET['nombre'];
    $correo = $_GET['correo'];
    $empresa = $_GET['empresa'];
    $fecha = $_GET['fecha'];
    $qr = $_GET['qr'];

    echo "<h3>Tu registro se ha completado</h3>";
    echo "<h3>¡Gracias por tu registro!</h3>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Correo: $correo</p>";
    echo "<p>Empresa: $empresa</p>";
    echo "<p>Fecha: $fecha</p>";
    echo "<img src='$qr' alt='Código QR'>";
} else {
    echo "<h3>Ocurrió un error al procesar la confirmación de registro</h3>";
}
?>

<h2>Guarda tu código copiando la imagen o en captura de pantalla<br>y muéstralo en recepción el día de evento para tener acceso.</h2>
</body>
</html>
