
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays I - PHP</title>

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
            max-width: 950px;
            margin: auto;
        }

        h1 {
            color: #263b5e;
            margin-bottom: 8px;
        }

        .introduccion {
            color: #65748b;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        .seccion {
            background: white;
            padding: 25px;
            margin-bottom: 25px;
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.06);
        }

        h2 {
            color: #315b91;
            margin-top: 0;
            border-bottom: 2px solid #e5edf7;
            padding-bottom: 12px;
        }

        h3 {
            color: #34495e;
            margin-top: 25px;
        }

        .ejemplo {
            background: #f4f7fb;
            border-left: 4px solid #5486bd;
            padding: 15px;
            margin: 15px 0;
            border-radius: 5px;
        }

        .resultado {
            background: #eaf4ed;
            border: 1px solid #c9e4d0;
            padding: 15px;
            border-radius: 7px;
            margin-top: 10px;
        }

        .resultado strong {
            color: #27623b;
        }

        pre {
            background: #202b3c;
            color: #e5edf7;
            padding: 15px;
            border-radius: 7px;
            overflow-x: auto;
            line-height: 1.5;
        }

        .etiqueta {
            display: inline-block;
            background: #e5edf8;
            color: #315b91;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .nota {
            background: #fff7e5;
            border-left: 4px solid #e5b34c;
            padding: 12px 15px;
            border-radius: 5px;
            line-height: 1.5;
            margin-top: 15px;
        }

        .dato {
            display: inline-block;
            background: white;
            border: 1px solid #c9e4d0;
            padding: 8px 12px;
            margin: 4px;
            border-radius: 6px;
        }

        footer {
            text-align: center;
            color: #8491a3;
            font-size: 13px;
            margin-top: 30px;
        }
    </style>
</head>

<body>

<div class="contenedor">

    <h1>Arrays en PHP</h1>
    <p class="introduccion">
        Los arrays permiten almacenar varios valores dentro de una misma variable.
        A continuación veremos cómo declarar arrays indexados y asociativos
        y cómo acceder a sus elementos.
    </p>

    <hr>

    <?php

        // ==========================================
        // 1. ARRAYS INDEXADOS
        // ==========================================

        $semanaA[] = "Lunes";
        $semanaA[] = "Martes";
        $semanaA[] = "Miércoles";

        $semanaB[0] = "Lunes";
        $semanaB[1] = "Martes";
        $semanaB[2] = "Miércoles";

        $semanaC = array("Lunes", "Martes", "Miércoles");

    ?>

    <section class="seccion">

        <h2>1. Arrays indexados</h2>

        <p>
            Sus elementos se identifican mediante índices numéricos,
            que comienzan normalmente en cero.
        </p>

        <h3>Declaración A: índices automáticos</h3>

        <div class="ejemplo">
            <pre>$semanaA[] = "Lunes";
$semanaA[] = "Martes";
$semanaA[] = "Miércoles";</pre>
        </div>

        <p>Accedemos al elemento situado en el índice 1:</p>

        <div class="resultado">
            <strong>Resultado:</strong>
            <?php echo $semanaA[1]; ?>
        </div>

        <h3>Declaración B: índices manuales</h3>

        <div class="ejemplo">
            <pre>$semanaB[0] = "Lunes";
$semanaB[1] = "Martes";
$semanaB[2] = "Miércoles";</pre>
        </div>

        <p>Accedemos al elemento situado en el índice 1:</p>

        <div class="resultado">
            <strong>Resultado:</strong>
            <?php echo $semanaB[1]; ?>
        </div>

        <h3>Declaración C: función array()</h3>

        <div class="ejemplo">
            <pre>$semanaC = array(
    "Lunes",
    "Martes",
    "Miércoles"
);</pre>
        </div>

        <p>Accedemos al elemento situado en el índice 1:</p>

        <div class="resultado">
            <strong>Resultado:</strong>
            <?php echo $semanaC[1]; ?>
        </div>

        <h3>Visualizar todos los elementos</h3>

        <p>Podemos utilizar <code>print_r()</code> para visualizar el contenido del array:</p>

        <div class="resultado">
            <strong>Contenido de semanaC:</strong>
            <pre><?php print_r($semanaC); ?></pre>
        </div>

        <div class="nota">
            <strong>Recuerda:</strong> el primer elemento de un array indexado
            tiene el índice 0, el segundo el índice 1 y así sucesivamente.
        </div>

    </section>

    <?php

        // ==========================================
        // 2. ARRAYS ASOCIATIVOS
        // ==========================================

        $datos = array(
            "Nombre" => "Juan",
            "Apellido" => "Gómez",
            "Edad" => 21
        );

    ?>

    <section class="seccion">

        <h2>2. Arrays asociativos</h2>

        <p>
            Sus elementos se identifican mediante claves, que nos permiten
            reconocer fácilmente la información almacenada.
        </p>

        <div class="ejemplo">
            <pre>$datos = array(
    "Nombre" => "Juan",
    "Apellido" => "Gómez",
    "Edad" => 21
);</pre>
        </div>

        <h3>Acceder a los elementos</h3>

        <p>Podemos obtener cada valor utilizando su clave:</p>

        <div class="resultado">
            <div class="dato">
                <strong>Nombre:</strong>
                <?php echo $datos["Nombre"]; ?>
            </div>

            <div class="dato">
                <strong>Apellido:</strong>
                <?php echo $datos["Apellido"]; ?>
            </div>

            <div class="dato">
                <strong>Edad:</strong>
                <?php echo $datos["Edad"]; ?> años
            </div>
        </div>

        <h3>Visualizar todos los elementos</h3>

        <p>También podemos mostrar el contenido completo del array:</p>

        <div class="resultado">
            <strong>Contenido de datos:</strong>
            <pre><?php print_r($datos); ?></pre>
        </div>

        <div class="nota">
            <strong>Recuerda:</strong> en un array asociativo utilizamos
            la clave correspondiente para acceder a cada valor,
            en lugar de utilizar su posición numérica.
        </div>

    </section>

    <section class="seccion">

        <h2>3. Resumen</h2>

        <p><strong>Arrays indexados:</strong> utilizan índices numéricos.</p>

        <p><strong>Arrays asociativos:</strong> utilizan claves para identificar sus elementos.</p>

        <p><strong>array() y []:</strong> son dos formas de declarar arrays en PHP.</p>

        <p><strong>print_r():</strong> permite visualizar los elementos almacenados en un array.</p>

    </section>

    <footer>
        PHP desde cero · Arrays I
    </footer>

</div>

</body>
</html>
