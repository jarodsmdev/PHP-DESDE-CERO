<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="contenedor">
        <h1>Resultados</h1>
        <hr>
        <?php

        require("conexion.php");

        $conexion = mysqli_connect(
            $DB_HOST,
            $DB_USERNAME,
            $DB_PASSWORD,
            $DB_DATABASE
        );

        if (!$conexion) {
            $mensaje = "No se pudo conectar con la base de datos";
            $tipo = "mensaje-error";
            exit();
        } else {
            mysqli_set_charset($conexion, "utf8mb4");

            // Recibimos el código del artículo
            $codigo = trim($_POST["buscar"] ?? "");

            // Creamos la consulta
            $consulta = "SELECT * FROM ARTICULOS WHERE CODIGOARTICULO = ?";

            // Preparamos la consulta
            $stmt = mysqli_prepare($conexion, $consulta);

            if (!$stmt) {
                $mensaje = "No se pudo preparar la consulta";
                $tipo = "mensaje-error";
            } else {
                // Asociar el parámetro
                mysqli_stmt_bind_param($stmt, "s", $codigo);

                // Ejecutar la consulta
                if (!mysqli_stmt_execute($stmt)) {
                    $mensaje = "Ha ocurrido un error al ejecutar la consulta";
                    $tipo = "mensaje-error";
                } else {
                    // Obtenemos los resultados
                    $resultado = mysqli_stmt_get_result($stmt);

                    // Recorremos los resultados
                    if (mysqli_num_rows($resultado) > 0) {
                        while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {

                            echo "<form class='formulario-articulo' action='actualizar.php' method='POST'>";
                            echo "<label>Código del artículo</label>";
                            echo "<input type='text' name='c_art' value='" . htmlspecialchars($fila['CODIGOARTICULO'], ENT_QUOTES, 'UTF-8') . "'>";

                            echo "<label>Nombre del artículo</label>";
                            echo "<input type='text' name='n_art' value='" . htmlspecialchars($fila['NOMBREARTICULO'], ENT_QUOTES, 'UTF-8') . "'>";

                            echo "<label>Sección</label>";
                            echo "<input type='text' name='seccion' value='" . htmlspecialchars($fila['SECCION'], ENT_QUOTES, 'UTF-8') . "'>";

                            echo "<label>Importado</label>";
                            echo "<input type='text' name='importado' value='" . htmlspecialchars($fila['IMPORTADO'], ENT_QUOTES, 'UTF-8') . "'>";

                            echo "<label>Precio</label>";
                            echo "<input type='text' name='precio' value='$" . number_format($fila['PRECIO'], 0, ',', '.') . "'>";

                            echo "<label>Fecha</label>";
                            echo "<input type='text' name='fecha' value='" . htmlspecialchars($fila['FECHA'], ENT_QUOTES, 'UTF-8') . "'>";

                            echo "<label>País de origen</label>";
                            echo "<input type='text' name='p_orig' value='" . htmlspecialchars($fila['PAISORIGEN'], ENT_QUOTES, 'UTF-8') . "'>";

                            echo "<input type='submit' name='enviar' value='Actualizar'>";
                            echo "</form>";
                            
                        }
                    } else {
                        $mensaje = "No se encontró ningún artículo con ese código";
                        $tipo = "mensaje-error";
                    }
                };
                mysqli_stmt_close($stmt);
            }

            // Liberamos la conexión
            mysqli_close($conexion);
        };
        ?>
        <!-- AREA PARA MENSAJES -->

        <?php if (isset($mensaje)) { ?>

            <div class="mensaje <?php echo $tipo ?? 'mensaje-info'; ?>">
                <?php echo htmlspecialchars($mensaje, ENT_QUOTES, 'UTF-8'); ?>
            </div>

        <?php } ?>

        <a href='buscar.php' class='btn-volver'>Volver a buscar</a>
    </div>
</body>

</html>