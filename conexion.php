<?php
    //CREDENCIALES PARA HACER LA CONEXION A LA BASE DE DATOS
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'db_registros';

    // Intentar realizar la conexión a la base de datos
    $conex = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

    // Verificar si se estableció la conexión exitosamente
    if (mysqli_connect_errno()) {
        // En caso de error, imprimir mensaje de error y terminar el script
        echo "Error al conectar a la base de datos MySQL: " . mysqli_connect_error();
        exit();
    }
?>
