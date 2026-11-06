
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays II - PHP</title>

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

        h2 {
            color: #315b91;
            border-bottom: 2px solid #e5edf7;
            padding-bottom: 12px;
            margin-top: 0;
        }

        h3 {
            color: #34495e;
            margin-top: 25px;
        }

        .introduccion {
            color: #65748b;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .seccion {
            background: white;
            padding: 25px;
            margin: 25px 0;
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.06);
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
            margin: 12px 0;
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

        .nota {
            background: #fff7e5;
            border-left: 4px solid #e5b34c;
            padding: 12px 15px;
            border-radius: 5px;
            line-height: 1.6;
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

        .correcto {
            color: #27623b;
            font-weight: bold;
        }

        .incorrecto {
            color: #a33b3b;
            font-weight: bold;
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

    <h1>Arrays II</h1>

    <p class="introduccion">
        En este apartado aprenderemos a comprobar si una variable
        es un array, recorrer sus elementos, añadir nuevos valores
        y ordenar su contenido.
    </p>

    <hr>

    <?php

    // ==========================================
    // 1. COMPROBAR SI ES UN ARRAY
    // ==========================================

    $datos = array(
        "Nombre" => "Juan",
        "Apellido" => "Gómez",
        "Edad" => 21
    );

    ?>

    <section class="seccion">

        <h2>1. Comprobar si es un array</h2>

        <p>
            La función <code>is_array()</code> permite comprobar
            si una variable contiene un array.
        </p>

        <div class="ejemplo">
            <pre>if (is_array($datos)) {
    echo "Es un array";
} else {
    echo "No es un array";
}</pre>
        </div>

        <div class="resultado">
            <strong>Resultado:</strong>

            <?php
            if (is_array($datos)) {
                echo '<p class="correcto">Es un array</p>';
                echo "<pre>";
                print_r($datos);
                echo "</pre>";
            } else {
                echo '<p class="incorrecto">No es un array</p>';
            }
            ?>
        </div>

        <?php
        $numero = 25;
        ?>

        <p>También podemos comprobar una variable que no sea un array:</p>

        <div class="resultado">
            <strong>Resultado:</strong>

            <?php
            if (is_array($numero)) {
                echo '<p class="correcto">Es un array</p>';
            } else {
                echo '<p class="incorrecto">No es un array</p>';
            }
            ?>
        </div>

    </section>


    <?php

    // ==========================================
    // 2. AÑADIR ELEMENTOS A UN ARRAY ASOCIATIVO
    // ==========================================

    $datos["País"] = "Chile";

    ?>

    <section class="seccion">

        <h2>2. Añadir elementos a un array</h2>

        <h3>Array asociativo</h3>

        <p>
            Podemos añadir un nuevo elemento indicando su clave
            y asignándole un valor.
        </p>

        <div class="ejemplo">
            <pre>$datos["País"] = "Chile";</pre>
        </div>

        <div class="resultado">
            <strong>Contenido actualizado:</strong>

            <?php
            echo "<pre>";
            print_r($datos);
            echo "</pre>";
            ?>
        </div>

        <h3>Array indexado</h3>

        <p>
            También podemos añadir elementos a un array indexado
            utilizando corchetes vacíos.
        </p>

        <?php

        $semana = array(
            "Lunes",
            "Martes",
            "Miércoles",
            "Jueves"
        );

        $semana[] = "Viernes";

        ?>

        <div class="ejemplo">
            <pre>$semana[] = "Viernes";</pre>
        </div>

        <div class="resultado">
            <strong>Contenido actualizado:</strong>

            <?php
            echo "<pre>";
            print_r($semana);
            echo "</pre>";
            ?>
        </div>

        <div class="nota">
            <strong>Recuerda:</strong> cuando utilizamos
            <code>[]</code>, PHP asigna automáticamente el siguiente
            índice numérico disponible.
        </div>

    </section>


    <section class="seccion">

        <h2>3. Recorrer un array</h2>

        <h3>Recorrer un array asociativo con foreach</h3>

        <p>
            La estructura <code>foreach</code> permite recorrer
            los elementos de un array y obtener su clave y su valor.
        </p>

        <div class="ejemplo">
            <pre>foreach ($datos as $clave => $valor) {
    echo "$clave: $valor";
}</pre>
        </div>

        <div class="resultado">
            <strong>Resultado:</strong>

            <?php
            foreach ($datos as $clave => $valor) {
                echo "<p><strong>{$clave}:</strong> {$valor}</p>";
            }
            ?>
        </div>

        <h3>Recorrer un array indexado con for</h3>

        <p>
            También podemos recorrer un array indexado utilizando
            un bucle <code>for</code> y la función <code>count()</code>.
        </p>

        <div class="ejemplo">
            <pre>for ($i = 0; $i < count($semana); $i++) {
    echo $semana[$i];
}</pre>
        </div>

        <div class="resultado">
            <strong>Resultado:</strong>

            <?php
            for ($i = 0; $i < count($semana); $i++) {
                echo "<p>Índice {$i}: {$semana[$i]}</p>";
            }
            ?>
        </div>

        <div class="nota">
            <strong>Recuerda:</strong> la función <code>count()</code>
            devuelve el número de elementos que contiene un array.
            En este ejemplo devuelve 5.
        </div>

    </section>


    <?php

    // ==========================================
    // 4. ORDENAR UN ARRAY
    // ==========================================

    $dias = array(
        "Jueves",
        "Lunes",
        "Viernes",
        "Martes",
        "Miércoles"
    );

    $dias_ascendentes = $dias;
    sort($dias_ascendentes);

    $dias_descendentes = $dias;
    rsort($dias_descendentes);

    ?>

    <section class="seccion">

        <h2>4. Ordenar un array</h2>

        <p>
            PHP dispone de diferentes funciones para ordenar
            los elementos de un array.
        </p>

        <h3>Array original</h3>

        <div class="resultado">
            <?php
            echo "<pre>";
            print_r($dias);
            echo "</pre>";
            ?>
        </div>

        <h3>sort(): orden ascendente</h3>

        <p>
            Ordena los valores de menor a mayor o alfabéticamente.
            Los índices numéricos se reorganizan.
        </p>

        <div class="ejemplo">
            <pre>sort($dias_ascendentes);</pre>
        </div>

        <div class="resultado">
            <strong>Resultado:</strong>

            <?php
            echo "<pre>";
            print_r($dias_ascendentes);
            echo "</pre>";
            ?>
        </div>

        <h3>rsort(): orden descendente</h3>

        <p>
            Ordena los valores de mayor a menor o alfabéticamente
            en orden inverso.
        </p>

        <div class="ejemplo">
            <pre>rsort($dias_descendentes);</pre>
        </div>

        <div class="resultado">
            <strong>Resultado:</strong>

            <?php
            echo "<pre>";
            print_r($dias_descendentes);
            echo "</pre>";
            ?>
        </div>

        <h3>Ordenar un array asociativo</h3>

        <p>
            Cuando trabajamos con arrays asociativos podemos
            utilizar <code>asort()</code> para ordenar los valores
            conservando sus claves.
        </p>

        <?php

        $notas = array(
            "Carlos" => 25,
            "Ana" => 19,
            "Pedro" => 30
        );

        $notas_ordenadas = $notas;
        asort($notas_ordenadas);

        ?>

        <div class="ejemplo">
            <pre>asort($notas_ordenadas);</pre>
        </div>

        <div class="resultado">
            <strong>Resultado:</strong>

            <?php
            echo "<pre>";
            print_r($notas_ordenadas);
            echo "</pre>";
            ?>
        </div>

        <div class="nota">
            <strong>Importante:</strong>
            <code>sort()</code> y <code>rsort()</code> reorganizan
            los índices numéricos. En cambio, <code>asort()</code>
            conserva las claves originales del array asociativo.
        </div>

    </section>


    <section class="seccion">

        <h2>5. Resumen</h2>

        <p><strong>is_array():</strong> comprueba si una variable es un array.</p>

        <p><strong>foreach:</strong> permite recorrer los elementos de un array.</p>

        <p><strong>for:</strong> permite recorrer un array utilizando sus índices.</p>

        <p><strong>count():</strong> devuelve el número de elementos.</p>

        <p><strong>[]:</strong> permite añadir elementos al final de un array indexado.</p>

        <p><strong>sort():</strong> ordena los valores de forma ascendente.</p>

        <p><strong>rsort():</strong> ordena los valores de forma descendente.</p>

        <p><strong>asort():</strong> ordena los valores conservando las claves.</p>

    </section>

    <footer>
        PHP desde cero · Arrays II
    </footer>

</div>

</body>
</html>
