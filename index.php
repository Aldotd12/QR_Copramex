<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegistroDialogosCiudadanos2024</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenedor-padre">
        <img src="./recursos/logo400d.png" alt="Descripción de la imagen" class="imagen-derecha">
        <div class="contenedor">
            <form action="registrar.php" method="post">
                <h2>Bienvenidos</h2>
                <input type="text" name="nombre" placeholder="Nombre">
                <input type="text" name="correo" placeholder="Correo">
                <input type="text" name="empresa" placeholder="Empresa">
                <input type="submit" class="btn" name="registrarse" value="Registrarse">
            </form>
        </div>
    </div>

    <?php
    include("registrar.php");
    ?>
</body>
</html>