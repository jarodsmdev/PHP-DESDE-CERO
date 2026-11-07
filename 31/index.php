
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de artículos</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f3f5f9;
            color: #263238;
            margin: 0;
            padding: 30px 15px;
        }

        .contenedor {
            max-width: 1200px;
            margin: auto;
        }

        h1 {
            color: #263b5e;
            text-align: center;
            margin-bottom: 10px;
        }

        .introduccion {
            color: #65748b;
            text-align: center;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        .tabla-contenedor {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.06);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 950px;
        }

        th, td {
            padding: 12px 10px;
            border-bottom: 1px solid #e5eaf0;
            text-align: center;
            font-size: 14px;
        }

        th {
            background: #315b91;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background: #f4f7fb;
        }

        tr:hover {
            background: #eaf1fa;
        }

        .precio {
            text-align: right;
            font-weight: bold;
            white-space: nowrap;
        }

        .importado-si {
            color: #27623b;
            font-weight: bold;
        }

        .importado-no {
            color: #a33b3b;
            font-weight: bold;
        }

        .contador {
            display: inline-block;
            background: #e5edf8;
            color: #315b91;
            padding: 8px 14px;
            border-radius: 7px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .error {
            background: #fdeaea;
            border: 1px solid #efc2c2;
            color: #a33b3b;
            padding: 15px;
            border-radius: 7px;
            margin: 20px 0;
        }

        footer {
            text-align: center;
            color: #8491a3;
            font-size: 13px;
            margin-top: 25px;
        }
    </style>
</head>

<body>

<div class="contenedor">

    <h1>Listado de artículos</h1>

    <p class="introduccion">
        Información de los artículos almacenados en nuestra base de datos MySQL.
    </p>

    <hr>

    <?php

    // ==========================================
    // 1. CONECTAR CON LA BASE DE DATOS
    // ==========================================

    include(__DIR__ . "/config.php");

    $conexion = mysqli_connect(
        $DB_HOST,
        $DB_USERNAME,
        $DB_PASSWORD,
        $DB_DATABASE
    );

    // Comprobar si existe un error de conexión

    if (mysqli_connect_errno()) {
        echo '<div class="error">Fallo al conectar con la base de datos.</div>';
        exit();
    }

    // Configurar el juego de caracteres

    $conexion->set_charset("utf8mb4");


    // ==========================================
    // 2. REALIZAR LA CONSULTA
    // ==========================================

    $consulta = "SELECT * FROM ARTICULOS";

    $resultados = mysqli_query($conexion, $consulta);

    // Comprobar si la consulta se ejecutó correctamente

    if (!$resultados) {
        echo '<div class="error">Error al realizar la consulta.</div>';

        mysqli_close($conexion);
        exit();
    }


    // ==========================================
    // 3. MOSTRAR LOS RESULTADOS
    // ==========================================

    $total_articulos = mysqli_num_rows($resultados);

    echo '<div class="tabla-contenedor">';

    echo '<div class="contador">';
    echo "Total de artículos: " . $total_articulos;
    echo '</div>';

    echo "<table>";

    // Encabezados de la tabla

    echo "<tr>
        <th>CÓDIGO</th>
        <th>SECCIÓN</th>
        <th>DESCRIPCIÓN</th>
        <th>PRECIO</th>
        <th>FECHA</th>
        <th>IMPORTADO</th>
        <th>ORIGEN</th>
        <th>FOTO</th>
    </tr>";


    // Recorrer los registros obtenidos

    while ($fila = mysqli_fetch_assoc($resultados)) {

        echo "<tr>";

        echo "<td>" .
            htmlspecialchars($fila["CODIGOARTICULO"]) .
            "</td>";

        echo "<td>" .
            htmlspecialchars($fila["SECCION"]) .
            "</td>";

        echo "<td>" .
            htmlspecialchars($fila["NOMBREARTICULO"]) .
            "</td>";

        echo '<td class="precio">$' .
            number_format((float)$fila["PRECIO"], 2, ",", ".") .
            "</td>";

        echo "<td>" .
            htmlspecialchars($fila["FECHA"]) .
            "</td>";

        // Mostrar si el artículo es importado

        if ($fila["IMPORTADO"] == "SI") {
            echo '<td class="importado-si">Sí</td>';
        } else {
            echo '<td class="importado-no">No</td>';
        }

        echo "<td>" .
            htmlspecialchars($fila["PAISORIGEN"]) .
            "</td>";

        echo "<td>" .
            htmlspecialchars($fila["FOTO"]) .
            "</td>";

        echo "</tr>";
    }

    echo "</table>";

    echo "</div>";


    // ==========================================
    // 4. LIBERAR RESULTADOS Y CERRAR CONEXIÓN
    // ==========================================

    mysqli_free_result($resultados);

    mysqli_close($conexion);

    ?>

    <footer>
        PHP desde cero · Conexión a MySQL y consulta de datos
    </footer>

</div>

</body>
</html>
