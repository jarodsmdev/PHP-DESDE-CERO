
<?php

$DB_HOST = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = "";
$DB_DATABASE = "pruebas";

// Valores iniciales del mensaje
$titulo = "Error";
$mensaje = "No se pudo realizar la operación.";
$icono = "!";
$clase = "error";

// Conexión a la base de datos
$conexion = mysqli_connect(
    $DB_HOST,
    $DB_USERNAME,
    $DB_PASSWORD,
    $DB_DATABASE
);

if (!$conexion) {
    $mensaje = "No se pudo conectar con la base de datos.";

} else {
    mysqli_set_charset($conexion, "utf8mb4");

    // Recibir el código del artículo
    $cod = trim($_POST["c_art"] ?? "");

    // Creamos la consulta
    $consulta = "DELETE FROM ARTICULOS WHERE CODIGOARTICULO = ?";

    // Preparamos la consulta
    $stmt = mysqli_prepare($conexion, $consulta);

    if ($stmt) {
        // Asociar el parámetro
        mysqli_stmt_bind_param($stmt, "s", $cod);

        // Ejecutar consulta
        if (mysqli_stmt_execute($stmt)) {

            // Comprobar filas afectadas
            $filas_afectadas = mysqli_stmt_affected_rows($stmt);

            if ($filas_afectadas > 0) {
                $titulo = "¡Artículo eliminado!";
                $mensaje = "El artículo se ha eliminado correctamente.";
                $icono = "✓";
                $clase = "exito";
            } else {
                $titulo = "Sin resultados";
                $mensaje = "No se encontró ningún artículo con ese código.";
            }

        } else {
            $mensaje = "Ha ocurrido un error al eliminar el artículo.";
        }

        mysqli_stmt_close($stmt);

    } else {
        $mensaje = "No se pudo preparar la consulta.";
    }

    mysqli_close($conexion);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la operación</title>
    <link rel="stylesheet" href="resultado.css">
</head>
<body>

    <div class="contenedor">
        <div class="mensaje <?php echo $clase; ?>">
            <span class="icono"><?php echo $icono; ?></span>
            <h1><?php echo htmlspecialchars($titulo, ENT_QUOTES, "UTF-8"); ?></h1>
            <p><?php echo htmlspecialchars($mensaje, ENT_QUOTES, "UTF-8"); ?></p>
        </div>

        <a href="./index.php" class="boton">Volver al formulario</a>
    </div>

</body>
</html>
