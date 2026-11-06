
<?php
// ==========================================
// 1. DATOS DE CONEXIÓN
// ==========================================

$DB_HOST = "localhost";
$DB_DATABASE = "pruebas";
$DB_USERNAME = "root";
$DB_PASSWORD = "";


// ==========================================
// 2. ESTABLECER CONEXIÓN CON MYSQL
// ==========================================

$conexion = new mysqli(
    $DB_HOST,
    $DB_USERNAME,
    $DB_PASSWORD,
    $DB_DATABASE
);


// ==========================================
// 3. COMPROBAR LA CONEXIÓN
// ==========================================

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}


// ==========================================
// 4. CONFIGURAR JUEGO DE CARACTERES
// ==========================================

$conexion->set_charset("utf8mb4");


// ==========================================
// 5. REALIZAR CONSULTA SQL
// ==========================================

$consulta = "SELECT * FROM DATOSPERSONALES";

$resultado = mysqli_query($conexion, $consulta);


// ==========================================
// 6. RECUPERAR Y MOSTRAR LOS REGISTROS
// ==========================================

$personas = [];

if ($resultado) {

    while ($fila = mysqli_fetch_assoc($resultado)) {
        $personas[] = $fila;
    }

} else {
    $errorConsulta = mysqli_error($conexion);
}


// ==========================================
// 7. CERRAR CONEXIÓN
// ==========================================

mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP y MySQLi</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 35px 20px;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #263445;
        }

        .contenedor {
            max-width: 1000px;
            margin: auto;
        }

        header {
            background: linear-gradient(135deg, #172554, #2563eb);
            color: white;
            padding: 35px;
            border-radius: 16px;
            margin-bottom: 25px;
        }

        header h1 {
            margin: 0 0 12px;
            font-size: 30px;
        }

        header p {
            margin: 0;
            line-height: 1.6;
            color: #dbeafe;
        }

        .tarjeta {
            background: white;
            padding: 25px;
            border-radius: 14px;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        h2 {
            color: #1d4ed8;
            margin-top: 0;
            font-size: 21px;
        }

        .descripcion {
            color: #64748b;
            line-height: 1.6;
        }

        .estado {
            display: inline-block;
            padding: 9px 14px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: bold;
            background: #dcfce7;
            color: #166534;
        }

        .codigo {
            background: #0f172a;
            color: #e2e8f0;
            padding: 16px;
            border-radius: 9px;
            overflow-x: auto;
            font-family: Consolas, monospace;
            font-size: 14px;
            line-height: 1.7;
        }

        .nota {
            background: #eff6ff;
            border-left: 4px solid #3b82f6;
            padding: 14px;
            border-radius: 6px;
            line-height: 1.6;
            margin-top: 15px;
        }

        .tabla-contenedor {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            padding: 13px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        th {
            background: #eff6ff;
            color: #1e40af;
        }

        tr:hover {
            background: #f8fafc;
        }

        .contador {
            color: #64748b;
            font-size: 14px;
            margin-top: 10px;
        }

        .error {
            background: #fee2e2;
            color: #991b1b;
            padding: 15px;
            border-radius: 8px;
        }

        footer {
            text-align: center;
            color: #94a3b8;
            padding: 20px;
            font-size: 13px;
        }
    </style>
</head>

<body>

<div class="contenedor">

    <header>
        <h1>PHP y MySQLi</h1>
        <p>
            Conexión a una base de datos MySQL, ejecución de consultas
            SQL y recuperación de registros mediante PHP.
        </p>
    </header>


    <!-- CONEXIÓN -->

    <section class="tarjeta">

        <h2>1. Conexión con MySQL</h2>

        <p class="descripcion">
            PHP utiliza la extensión MySQLi para establecer una
            comunicación con el servidor de bases de datos MySQL.
        </p>

        <div class="codigo">
            $conexion = new mysqli(<br>
            &nbsp;&nbsp;"localhost",<br>
            &nbsp;&nbsp;"root",<br>
            &nbsp;&nbsp;"",<br>
            &nbsp;&nbsp;"pruebas"<br>
            );
        </div>

        <br>

        <span class="estado">✓ Conexión establecida</span>

        <div class="nota">
            <strong>Importante:</strong> si existe un error de conexión,
            el programa lo detecta mediante <code>connect_error</code>
            y detiene su ejecución con <code>die()</code>.
        </div>

    </section>


    <!-- CONFIGURACIÓN -->

    <section class="tarjeta">

        <h2>2. Configuración de caracteres</h2>

        <p class="descripcion">
            Establecemos UTF-8 para que la comunicación entre PHP
            y MySQL pueda trabajar correctamente con tildes,
            eñes y otros caracteres especiales.
        </p>

        <div class="codigo">
            $conexion->set_charset("utf8mb4");
        </div>

    </section>


    <!-- CONSULTA -->

    <section class="tarjeta">

        <h2>3. Consulta SQL</h2>

        <p class="descripcion">
            Ejecutamos una consulta SELECT para recuperar todos
            los registros almacenados en la tabla DATOSPERSONALES.
        </p>

        <div class="codigo">
            $consulta = "SELECT * FROM DATOSPERSONALES";<br><br>
            $resultado = mysqli_query($conexion, $consulta);
        </div>

        <div class="nota">
            <strong>¿Qué significa SELECT *?</strong><br>
            SELECT indica que queremos recuperar información.
            El asterisco (*) significa que queremos obtener todas
            las columnas de la tabla.
        </div>

    </section>


    <!-- RESULTADOS -->

    <section class="tarjeta">

        <h2>4. Registros recuperados</h2>

        <p class="descripcion">
            Utilizamos <code>mysqli_fetch_assoc()</code> para recuperar
            cada fila del resultado como un array asociativo.
            El bucle <code>while</code> permite recorrer todas las filas.
        </p>

        <?php if (isset($errorConsulta)): ?>

            <div class="error">
                Error al ejecutar la consulta:
                <?= htmlspecialchars($errorConsulta) ?>
            </div>

        <?php elseif (count($personas) > 0): ?>

            <div class="tabla-contenedor">

                <table>
                    <thead>
                        <tr>
                            <th>NIF</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Edad</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach ($personas as $persona): ?>

                            <tr>
                                <td>
                                    <?= htmlspecialchars($persona["NIF"]) ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($persona["NOMBRE"]) ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($persona["APELLIDO"]) ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars((string)$persona["EDAD"]) ?>
                                </td>
                            </tr>

                        <?php endforeach; ?>

                    </tbody>
                </table>

            </div>

            <p class="contador">
                Total de registros recuperados:
                <strong><?= count($personas) ?></strong>
            </p>

        <?php else: ?>

            <p>No se encontraron registros en la tabla.</p>

        <?php endif; ?>

    </section>


    <!-- CIERRE -->

    <section class="tarjeta">

        <h2>5. Cerrar conexión</h2>

        <p class="descripcion">
            Una vez finalizado el trabajo con la base de datos,
            cerramos la conexión para liberar los recursos utilizados.
        </p>

        <div class="codigo">
            mysqli_close($conexion);
        </div>

        <span class="estado">✓ Conexión cerrada</span>

    </section>


    <footer>
        PHP desde cero · Conexión a bases de datos MySQL mediante MySQLi
    </footer>

</div>

</body>
</html>
