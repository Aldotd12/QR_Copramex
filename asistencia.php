<?php
include("conexion.php");

// Verifica si se recibieron los datos esperados
if(isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['empresa'])) {

    
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $empresa = $_POST['empresa'];

    // Preparar la consulta SQL para insertar los datos en la tabla 'asistencia'
    $consulta = $conex->prepare("INSERT INTO asistencia (nombre, correo, empresa) VALUES (?, ?, ?)");
    $consulta->bind_param("sss", $nombre, $correo, $empresa);

    // Ejecutar la consulta SQL
    if($consulta->execute()) {
        echo "Datos de asistencia guardados correctamente.";
    } else {
        echo "Error al guardar los datos de asistencia: " . $conex->error;
    }
} else {
    echo "No se recibieron datos del código QR.";
}
?>
