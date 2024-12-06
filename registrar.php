<?php
    include("conexion.php");
    include 'phpqrcode/qrlib.php';

    if (isset($_POST['registrarse'])) {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $empresa = $_POST['empresa'];
        $fecha = date("d/m/y");

        if(strlen($nombre) >= 1 && strlen($correo) >= 1 && strlen($empresa) >= 1) {

            //Se guardan los datos a la base de datos, en la tabla registro....
            $consulta = $conex->prepare("INSERT INTO registro (nombre, correo, empresa, fecha) VALUES (?, ?, ?, ?)");
            $consulta->bind_param("ssss", $nombre, $correo, $empresa, $fecha);

            if($consulta->execute()) {

                $contenidoQR = "Nombre: $nombre\nCorreo: $correo\nEmpresa: $empresa";
                
                $filename = 'codigo_qr.png';//Parte donde se muestra el QR en la pagina web...
                
                QRcode::png($contenidoQR, $filename, 'L', 4, 2);
                
                //Aqui se muestran los datos del usuario que ingreso al registrarse...
                header("Location: confirmacion.php?nombre=$nombre&correo=$correo&empresa=$empresa&fecha=$fecha&qr=$filename");
                exit;


                //Posibles errores de inserción de los datos o campos vacios en el formulario..
            } else {
                ?>
                <h3 class="error">Ocurrió un error al guardar los datos</h3>
                <?php
            }
        } else {
            ?>
            <h3 class="error">Por favor, llena todos los campos</h3>
            <?php
        }
    }

    ?>
