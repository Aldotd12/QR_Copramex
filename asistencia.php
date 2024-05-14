<?php
include("conexion.php");

if(isset($_POST['nombre']) && isset($_POST['empresa']) && isset($_POST['fecha'])) {

    // Obtener los datos del código QR
    $nombre = $_POST['nombre'];
    $empresa = $_POST['empresa'];
    $fecha = $_POST['fecha'];

    
    $escaneo = $POST[$consulta];

    if($encaneo->execute()) {
        $consulta = $conex->prepare("INSERT INTO asistencia (nombre, empresa, fecha) VALUES (?, ?, ?)");
        $consulta->bind_param("sss", $nombre, $empresa, $fecha);

    } else {
        echo "Error al guardar la asistencia en la base de datos";
    }



    if($consulta->execute()) {
        echo "Datos de asistencia guardados correctamente.";
    } else {
        echo "Error al guardar los datos de asistencia: " . $conex->error;
    }
} else {
    echo "No se recibieron datos del código QR.";
}
?>
