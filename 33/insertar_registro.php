<?php
$DB_HOST = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = "";
$DB_DATABASE = "pruebas";

// Conexión a la base de datos
$conexion = mysqli_connect(
    $DB_HOST,
    $DB_USERNAME,
    $DB_PASSWORD,
    $DB_DATABASE
);

if (!$conexion) {
    die("Error al conectar con la base de datos.");
}

mysqli_set_charset($conexion, "utf8mb4");

// Recibir y limpiar los datos
$cod = trim($_POST["c_art"] ?? "");
$sec = trim($_POST["seccion"] ?? "");
$nom = trim($_POST["n_art"] ?? "");
$pre = $_POST["precio"] ?? "";
$fec = trim($_POST["fecha"] ?? "");
$imp = trim($_POST["importado"] ?? "");
$por = trim($_POST["p_orig"] ?? "");


// Validar que el precio sea numérico
if (!is_numeric($pre) || (float)$pre < 0) {
    die("<p class='error'>Error: el precio debe ser válido.</p>");
}

$pre = (float)$pre;

// CONSULTA PREPARADA: protección contra SQL Injection
$consulta = "INSERT INTO ARTICULOS
(CODIGOARTICULO, SECCION, NOMBREARTICULO, PRECIO, FECHA, IMPORTADO, PAISORIGEN)
VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conexion, $consulta);

if (!$stmt) {
     die("Error al preparar la consulta: " . mysqli_error($conexion));
}

// Asociar los parámetros
mysqli_stmt_bind_param(
    $stmt,
    "sssdsss",
    $cod,
    $sec,
    $nom,
    $pre,
    $fec,
    $imp,
    $por
);

// Ejecutar consulta
if (mysqli_stmt_execute($stmt)) {

    // Escapar datos para mostrarlos de forma segura en HTML
    function seguro(string $dato): string {
        return htmlspecialchars(
            (string)$dato,
            ENT_QUOTES,
            "UTF-8"
        );
    }

    echo '<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro guardado</title>
        <link rel="stylesheet" href="resultado.css">
    </head>
    <body>

        <div class="contenedor">
            <div class="mensaje">
                <span class="icono">✓</span>
                <h1>¡Registro guardado!</h1>
                <p>El artículo se ha insertado correctamente.</p>
            </div>

            <h2>Datos del artículo</h2>

            <table>
                <tr>
                    <th>Código artículo</th>
                    <td>' . seguro($cod) . '</td>
                </tr>
                <tr>
                    <th>Sección</th>
                    <td>' . seguro($sec) . '</td>
                </tr>
                <tr>
                    <th>Nombre artículo</th>
                    <td>' . seguro($nom) . '</td>
                </tr>
                <tr>
                    <th>Precio</th>
                    <td>' . seguro($pre) . '</td>
                </tr>
                <tr>
                    <th>Fecha</th>
                    <td>' . seguro($fec) . '</td>
                </tr>
                <tr>
                    <th>Importado</th>
                    <td>' . seguro($imp) . '</td>
                </tr>
                <tr>
                    <th>País de origen</th>
                    <td>' . seguro($por) . '</td>
                </tr>
            </table>

            <a href="./index.php" class="boton">Volver al formulario</a>
        </div>

    </body>
    </html>';

} else {
    echo '<p class="error">Error al guardar el registro.</p>';
}

// Cerrar conexiones
mysqli_stmt_close($stmt);
mysqli_close($conexion);
?>