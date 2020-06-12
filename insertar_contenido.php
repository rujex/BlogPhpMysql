<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $miConexion = mysqli_connect("localhost", "root", "", "bbddblog");

        //Comprobar conexion

        if(!$miConexion){
            echo "La conexión ha fallado: " . mysqli_error($miConexion);

            exit();
        }

        if($_FILES['imagen']['error']){
            switch($_FILES['imagen']['error']){
                case 1: // Error exceso de tamaño de archivo en php.ini
                        echo "El tamaño del archivo excede lo permitido por el servidor";

                break;
                case 2: // Error tamaño archivo marcado desde formulario
                        echo "El tamaño del archivo excede 2MB";
                break;
                case 3: // Corrupción de archivo
                        echo "El envío de archivo se interrumpió";
                break;
                case 4: // No hay fichero
                        echo "No se ha enviado ningún archivo";
                break;
            }
        } else {
            echo "Entrada subida correctamente</br>";

            if((isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error'] == UPLOAD_ERR_OK))){
                
                $destinoRuta = "img/";

                move_uploaded_file($_FILES['imagen']['tmp_name'], $destinoRuta . $_FILES['imagen']['name']);

                echo "El archivo " . $_FILES['imagen']['name'] . " Se ha copiado en el directorio de imágenes";

            }else {
                echo "El archivo no se ha podido copiar al directorio de imágenes";
            }
        }

        $titulo = $_POST['title'];

        $fecha = date("Y-m-d H:i:s");

        $comentario = $_POST['comentario'];

        $imagen = $_FILES['imagen']['name'];

        $miConsulta = "INSERT INTO contenido (Titulo, Fecha, Comentario, Imagen) VALUES ('" . $titulo . "', '" . $fecha . "', '" . $comentario . "', '" . $imagen . "') ";

        $resultado = mysqli_query($miConexion, $miConsulta);

        // Cerramos conexión

        mysqli_close($miConexion);

        echo "<br/> Se ha agregado el comentario con éxito. <br/><br/>";

    ?>
</body>
</html>