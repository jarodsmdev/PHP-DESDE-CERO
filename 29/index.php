
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays III - PHP</title>

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

        .tarjetas {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 12px;
            margin-top: 15px;
        }

        .tarjeta {
            background: #f4f7fb;
            border: 1px solid #dce5f0;
            border-radius: 8px;
            padding: 15px;
        }

        .tarjeta h3 {
            margin-top: 0;
            color: #315b91;
        }

        .valor {
            font-size: 18px;
            font-weight: bold;
            color: #27623b;
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

    <h1>Arrays III: Arrays multidimensionales</h1>

    <p class="introduccion">
        Aprenderemos a trabajar con arrays que contienen otros arrays,
        acceder a sus valores, recorrer sus elementos y utilizar
        la desestructuración para asignar sus valores a variables.
    </p>

    <hr>

    <?php

    // ==========================================
    // 1. ARRAY MULTIDIMENSIONAL
    // ==========================================

    $alimentos = array(
        "fruta" => array(
            "tropical" => "Kiwi",
            "cítrico" => "Mandarina",
            "otros" => "Manzana"
        ),

        "leche" => array(
            "animal" => "Vaca",
            "vegetal" => "Coco"
        ),

        "carne" => array(
            "vacuno" => "Lomo",
            "porcino" => "Pata"
        )
    );

    ?>

    <section class="seccion">

        <h2>1. Arrays multidimensionales</h2>

        <p>
            Un array multidimensional es aquel que contiene otros arrays
            como elementos. Esto permite organizar la información
            en diferentes niveles.
        </p>

        <div class="ejemplo">
            <strong>Declaración del array:</strong>

            <pre>$alimentos = [
    "fruta" => [
        "tropical" => "Kiwi",
        "cítrico" => "Mandarina",
        "otros" => "Manzana"
    ],

    "leche" => [
        "animal" => "Vaca",
        "vegetal" => "Coco"
    ],

    "carne" => [
        "vacuno" => "Lomo",
        "porcino" => "Pata"
    ]
];</pre>
        </div>

        <h3>Estructura del array</h3>

        <div class="tarjetas">

            <div class="tarjeta">
                <h3>Fruta</h3>
                <p><strong>tropical:</strong> Kiwi</p>
                <p><strong>cítrico:</strong> Mandarina</p>
                <p><strong>otros:</strong> Manzana</p>
            </div>

            <div class="tarjeta">
                <h3>Leche</h3>
                <p><strong>animal:</strong> Vaca</p>
                <p><strong>vegetal:</strong> Coco</p>
            </div>

            <div class="tarjeta">
                <h3>Carne</h3>
                <p><strong>vacuno:</strong> Lomo</p>
                <p><strong>porcino:</strong> Pata</p>
            </div>

        </div>

        <div class="nota">
            <strong>Observación:</strong> tenemos un array principal
            llamado <code>$alimentos</code>, que contiene tres arrays
            internos: fruta, leche y carne.
        </div>

    </section>


    <section class="seccion">

        <h2>2. Acceder a los valores</h2>

        <p>
            Para acceder a un elemento de un array multidimensional
            debemos indicar sus claves o índices siguiendo el orden
            de los niveles.
        </p>

        <div class="ejemplo">
            <pre>echo $alimentos["carne"]["vacuno"];</pre>
        </div>

        <div class="resultado">
            <strong>Resultado:</strong>

            <p class="valor">
                <?php echo $alimentos["carne"]["vacuno"]; ?>
            </p>
        </div>

        <h3>Otros ejemplos</h3>

        <div class="resultado">
            <p>
                <strong>Fruta tropical:</strong>
                <?php echo $alimentos["fruta"]["tropical"]; ?>
            </p>

            <p>
                <strong>Fruta cítrica:</strong>
                <?php echo $alimentos["fruta"]["cítrico"]; ?>
            </p>

            <p>
                <strong>Leche vegetal:</strong>
                <?php echo $alimentos["leche"]["vegetal"]; ?>
            </p>

            <p>
                <strong>Carne porcina:</strong>
                <?php echo $alimentos["carne"]["porcino"]; ?>
            </p>
        </div>

    </section>


    <section class="seccion">

        <h2>3. Recorrer un array multidimensional</h2>

        <p>
            Podemos recorrer un array multidimensional utilizando
            bucles anidados. En este ejemplo utilizaremos un
            <code>foreach</code> dentro de otro <code>foreach</code>.
        </p>

        <div class="ejemplo">
            <pre>foreach ($alimentos as $clave_alim => $alim) {

    echo "&lt;h3&gt;$clave_alim&lt;/h3&gt;";

    foreach ($alim as $clave => $valor) {
        echo "&lt;p&gt;$clave: $valor&lt;/p&gt;";
    }
}</pre>
        </div>

        <div class="resultado">

            <strong>Resultado del recorrido:</strong>

            <?php

            foreach ($alimentos as $clave_alim => $alim) {

                echo "<h3>" . htmlspecialchars($clave_alim) . ":</h3>";

                foreach ($alim as $clave => $valor) {
                    echo "<p><strong>" .
                        htmlspecialchars($clave) .
                        ":</strong> " .
                        htmlspecialchars($valor) .
                        "</p>";
                }
            }

            ?>

        </div>

        <div class="nota">
            <strong>Importante:</strong> el primer
            <code>foreach</code> recorre las categorías principales.
            El segundo recorre los elementos que contiene cada categoría.
            A esto lo conocemos como bucles anidados.
        </div>

        <h3>Visualizar el contenido completo</h3>

        <p>
            También podemos utilizar <code>print_r()</code> o
            <code>var_dump()</code> para observar la estructura
            completa del array.
        </p>

        <div class="resultado">
            <strong>Utilizando var_dump():</strong>

            <pre><?php var_dump($alimentos); ?></pre>
        </div>

    </section>


    <?php

    // ==========================================
    // 4. DESESTRUCTURACIÓN DE ARRAYS INDEXADOS
    // ==========================================

    $datos = [1, 2, 3];

    [$a, $b, $c] = $datos;

    ?>

    <section class="seccion">

        <h2>4. Desestructuración de arrays</h2>

        <p>
            La desestructuración permite extraer los valores de un array
            y asignarlos directamente a diferentes variables.
        </p>

        <h3>4.1. Desestructuración de un array indexado</h3>

        <p>
            En un array indexado, los valores se asignan a las variables
            siguiendo el orden de sus índices.
        </p>

        <div class="ejemplo">
            <pre>$datos = [1, 2, 3];

[$a, $b, $c] = $datos;</pre>
        </div>

        <div class="resultado">

            <strong>Valores obtenidos:</strong>

            <div class="tarjetas">

                <div class="tarjeta">
                    <h3>Variable $a</h3>
                    <p class="valor"><?php echo $a; ?></p>
                    <small>Índice 0</small>
                </div>

                <div class="tarjeta">
                    <h3>Variable $b</h3>
                    <p class="valor"><?php echo $b; ?></p>
                    <small>Índice 1</small>
                </div>

                <div class="tarjeta">
                    <h3>Variable $c</h3>
                    <p class="valor"><?php echo $c; ?></p>
                    <small>Índice 2</small>
                </div>

            </div>

        </div>

        <div class="nota">
            <strong>Observación:</strong> la primera variable recibe
            el valor del índice 0, la segunda el del índice 1
            y la tercera el del índice 2.
        </div>

    </section>


    <?php

    // ==========================================
    // 5. DESESTRUCTURACIÓN DE ARRAYS ASOCIATIVOS
    // ==========================================

    $persona = [
        "nombre" => "Luis",
        "edad" => 21,
        "ciudad" => "Madrid"
    ];

    [
        "nombre" => $elNombre,
        "edad" => $laEdad,
        "ciudad" => $laCiudad
    ] = $persona;

    ?>

    <section class="seccion">

        <h2>5. Desestructuración de un array asociativo</h2>

        <p>
            En los arrays asociativos podemos indicar las claves
            cuyos valores queremos extraer y asignarlos a diferentes
            variables.
        </p>

        <div class="ejemplo">
            <pre>$persona = [
    "nombre" => "Luis",
    "edad" => 21,
    "ciudad" => "Madrid"
];

[
    "nombre" => $elNombre,
    "edad" => $laEdad,
    "ciudad" => $laCiudad
] = $persona;</pre>
        </div>

        <div class="resultado">

            <strong>Valores obtenidos:</strong>

            <div class="tarjetas">

                <div class="tarjeta">
                    <h3>$elNombre</h3>
                    <p class="valor"><?php echo $elNombre; ?></p>
                    <small>Clave: nombre</small>
                </div>

                <div class="tarjeta">
                    <h3>$laEdad</h3>
                    <p class="valor"><?php echo $laEdad; ?></p>
                    <small>Clave: edad</small>
                </div>

                <div class="tarjeta">
                    <h3>$laCiudad</h3>
                    <p class="valor"><?php echo $laCiudad; ?></p>
                    <small>Clave: ciudad</small>
                </div>

            </div>

        </div>

        <h3>Mostrar las variables</h3>

        <div class="resultado">
            <p>
                <?php echo "$elNombre tiene $laEdad años y vive en $laCiudad."; ?>
            </p>
        </div>

        <div class="nota">
            <strong>Importante:</strong> en la desestructuración
            asociativa utilizamos las claves del array para indicar
            qué valores queremos asignar a cada variable.
        </div>

    </section>


    <section class="seccion">

        <h2>6. Resumen</h2>

        <p>
            <strong>Arrays multidimensionales:</strong>
            contienen otros arrays como elementos.
        </p>

        <p>
            <strong>Acceso a valores:</strong>
            utilizamos varios índices o claves entre corchetes.
        </p>

        <p>
            <strong>Bucles anidados:</strong>
            permiten recorrer arrays que contienen otros arrays.
        </p>

        <p>
            <strong>print_r() y var_dump():</strong>
            permiten visualizar la estructura y el contenido de un array.
        </p>

        <p>
            <strong>Desestructuración indexada:</strong>
            asigna los valores siguiendo el orden de los índices.
        </p>

        <p>
            <strong>Desestructuración asociativa:</strong>
            permite extraer valores indicando sus claves.
        </p>

    </section>

    <footer>
        PHP desde cero · Arrays III
    </footer>

</div>

</body>
</html>
