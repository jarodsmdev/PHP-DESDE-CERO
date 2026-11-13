<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar artículo</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <div class="contenedor">

        <h1>Actualizar artículo</h1>
        <hr>

        <?php

        require("conexion.php");

        $mensaje = "";
        $tipo = "";
        $fila = null;

        try {

            // Conectar con la base de datos
            $conexion = mysqli_connect(
                $DB_HOST,
                $DB_USERNAME,
                $DB_PASSWORD,
                $DB_DATABASE
            );

            mysqli_set_charset($conexion, "utf8mb4");

            // Verificar que los datos lleguen por POST
            if ($_SERVER["REQUEST_METHOD"] != "POST") {

                throw new Exception("No se recibieron datos mediante POST");
            }

            // Recibir y limpiar los datos
            $cod = trim($_POST["c_art"] ?? "");
            $sec = trim($_POST["seccion"] ?? "");
            $nom = trim($_POST["n_art"] ?? "");
            $pre = trim($_POST["precio"] ?? "");
            $fec = trim($_POST["fecha"] ?? "");
            $imp = trim($_POST["importado"] ?? "");
            $por = trim($_POST["p_orig"] ?? "");

            // Validar código
            if ($cod == "") {
                throw new Exception("El código del artículo es obligatorio");
            }

            // Normalizar precio recibido: $25.000 -> 25000
            $pre = str_replace("$", "", $pre);
            $pre = str_replace(".", "", $pre);
            $pre = str_replace(",", ".", $pre);

            if (!is_numeric($pre)) {
                throw new Exception("El precio ingresado no es válido");
            }

            // CONSULTA UPDATE
            $consulta = "UPDATE ARTICULOS
                     SET NOMBREARTICULO = ?,
                         SECCION = ?,
                         IMPORTADO = ?,
                         PRECIO = ?,
                         FECHA = ?,
                         PAISORIGEN = ?
                     WHERE CODIGOARTICULO = ?";

            // Preparar consulta
            $stmt = mysqli_prepare($conexion, $consulta);

            // Asociar parámetros
            mysqli_stmt_bind_param(
                $stmt,
                "sssdsss",
                $nom,
                $sec,
                $imp,
                $pre,
                $fec,
                $por,
                $cod
            );

            // Ejecutar UPDATE
            mysqli_stmt_execute($stmt);

            mysqli_stmt_close($stmt);

            // CONSULTA SELECT para recuperar los datos actualizados
            $consulta = "SELECT * FROM ARTICULOS
                     WHERE CODIGOARTICULO = ?";

            $stmt = mysqli_prepare($conexion, $consulta);

            mysqli_stmt_bind_param($stmt, "s", $cod);

            mysqli_stmt_execute($stmt);

            $resultado = mysqli_stmt_get_result($stmt);

            // Recuperar el artículo
            $fila = mysqli_fetch_assoc($resultado);

            if ($fila) {

                $mensaje = "Artículo actualizado correctamente";
                $tipo = "mensaje-exito";
            } else {

                $mensaje = "No se encontró el artículo";
                $tipo = "mensaje-error";
            }

            mysqli_stmt_close($stmt);

            mysqli_close($conexion);
        } catch (Throwable $e) {

            $mensaje = "Error: " . $e->getMessage();
            $tipo = "mensaje-error";

            if (isset($conexion)) {
                mysqli_close($conexion);
            }
        }

        ?>

        <!-- MOSTRAR MENSAJE -->

        <?php if ($mensaje != "") { ?>

            <div class="mensaje <?php echo $tipo; ?>">
                <?php echo htmlspecialchars($mensaje, ENT_QUOTES, 'UTF-8'); ?>
            </div>

        <?php } ?>


        <!-- MOSTRAR FORMULARIO CON LOS DATOS -->

        <?php if ($fila) { ?>

            <form class="formulario-articulo"
                action=""
                method="POST">

                <label>Código del artículo</label>

                <input type="text"
                    name="c_art"
                    value="<?php echo htmlspecialchars($fila['CODIGOARTICULO'], ENT_QUOTES, 'UTF-8'); ?>"
                    readonly>

                <label>Nombre del artículo</label>

                <input type="text"
                    name="n_art"
                    value="<?php echo htmlspecialchars($fila['NOMBREARTICULO'], ENT_QUOTES, 'UTF-8'); ?>"
                    readonly>

                <label>Sección</label>

                <input type="text"
                    name="seccion"
                    value="<?php echo htmlspecialchars($fila['SECCION'], ENT_QUOTES, 'UTF-8'); ?>"
                    readonly>

                <label>Importado</label>

                <input type="text"
                    name="importado"
                    value="<?php echo htmlspecialchars($fila['IMPORTADO'], ENT_QUOTES, 'UTF-8'); ?>"
                    readonly>

                <label>Precio</label>

                <input type="text"
                    name="precio"
                    value="<?php echo '$' . number_format($fila['PRECIO'], 0, ',', '.'); ?>"
                    readonly>

                <label>Fecha</label>

                <input type="text"
                    name="fecha"
                    value="<?php echo htmlspecialchars($fila['FECHA'], ENT_QUOTES, 'UTF-8'); ?>"
                    readonly>

                <label>País de origen</label>

                <input type="text"
                    name="p_orig"
                    value="<?php echo htmlspecialchars($fila['PAISORIGEN'], ENT_QUOTES, 'UTF-8'); ?>"
                    readonly>
            </form>

        <?php } ?>

        <a href="buscar.php" class="btn-volver">
            Volver a buscar
        </a>

    </div>

</body>

</html>