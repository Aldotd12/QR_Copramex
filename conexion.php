<?php
    //CREDENCIALES PARA HACER LA CONEXION A LA BASE DE DATOS
    $DATABASE_HOST='localhost';
    $DATABASE_USER='root';
    $DATABASE_PASS='';
    $DATABASE_NAME='db_registros';

    //CONEXION A LA BASE DE DATOS...
    $conex = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
?>