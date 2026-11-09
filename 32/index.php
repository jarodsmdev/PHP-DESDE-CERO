<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Listado de artículos</h1>
    <hr>
    <form method="GET" action="">
        <input type="text" name="buscar" placeholder="Buscar artículo...">
        <input type="submit" value="Buscar">
    </form>

    <?php
    require("config.php");

    $conexion = mysqli_connect(
        $DB_HOST,
        $DB_USERNAME,
        $DB_PASSWORD,
        $DB_DATABASE
    );

    if (mysqli_connect_errno()) {
        echo "<p>Fallo al conectar con la base de datos</p>";
        exit();
    }

    $conexion->set_charset("utf8mb4");

    $consulta = "SELECT * FROM ARTICULOS WHERE NOMBREARTICULO LIKE ?";

    $stmt = mysqli_prepare($conexion, $consulta);

    $buscar = $_GET['buscar'] ?? '';

    $buscar = "%" . $buscar . "%";

    mysqli_stmt_bind_param($stmt, "s", $buscar);

    mysqli_stmt_execute($stmt);

    $resultados = mysqli_stmt_get_result($stmt);

    if (!$resultados) {
        echo "<p>Error al ejecutar la consulta</p>";
        exit();
    }

    echo
    "<table align='CENTER'>
        <tr>
            <th>CÓDIGO</th>
            <th>SECCIÓN</th>
            <th>ARTÍCULO</th>
            <th>PRECIO</th>
            <th>FECHA</th>
            <th>IMPORTADO</th>
            <th>ORIGEN</th>
            <th>FOTO</th>
        </tr>
        ";
    while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
    echo "<tr>
        <td>" . htmlspecialchars($fila['CODIGOARTICULO'], ENT_QUOTES, 'UTF-8') . "</td>
        <td>" . htmlspecialchars($fila['SECCION'], ENT_QUOTES, 'UTF-8') . "</td>
        <td>" . htmlspecialchars($fila['NOMBREARTICULO'], ENT_QUOTES, 'UTF-8') . "</td>
        <td>$" . number_format($fila['PRECIO'], 0, ',', '.') . "</td>
        <td>" . htmlspecialchars($fila['FECHA'], ENT_QUOTES, 'UTF-8') . "</td>
        <td>" . htmlspecialchars($fila['IMPORTADO'], ENT_QUOTES, 'UTF-8') . "</td>
        <td>" . htmlspecialchars($fila['PAISORIGEN'], ENT_QUOTES, 'UTF-8') . "</td>
        <td>" . htmlspecialchars($fila['FOTO'], ENT_QUOTES, 'UTF-8') . "</td>
    </tr>";
}
    echo "</table>";
    ?>
</body>

</html>