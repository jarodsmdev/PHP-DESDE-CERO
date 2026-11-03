
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles I</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f3f5;
            margin: 0;
            padding: 25px;
            color: #333;
        }

        h1 {
            text-align: center;
        }

        .contenedor {
            max-width: 750px;
            margin: 20px auto;
        }

        .ejemplo {
            background: white;
            padding: 22px;
            margin-bottom: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px #00000015;
        }

        h2 {
            color: #2457a6;
        }

        pre {
            background: #272822;
            color: #f8f8f2;
            padding: 15px;
            border-radius: 6px;
            overflow-x: auto;
            line-height: 1.5;
        }

        .resultado {
            background: #e5f5e9;
            border-left: 5px solid #24964b;
            padding: 12px;
            margin-top: 18px;
            line-height: 1.8;
        }

        .aviso {
            background: #fff3cd;
            border-left: 5px solid #e0a800;
            padding: 12px;
            margin-top: 18px;
        }
    </style>
</head>

<body>

    <h1>Uso de While y Do While</h1>
    <hr>

    <div class="contenedor">

        <?php

        // EJEMPLO 1: WHILE

        echo "<div class='ejemplo'>";

        echo "<h2>Bucle While</h2>";

        echo "<p>Se ejecuta mientras la condición sea verdadera.</p>";

        echo "<pre>";
        echo htmlspecialchars('$var1 = 1;

while ($var1 < 6) {
    echo "Estamos ejecutando el código del bucle";
    $var1++;
}');
        echo "</pre>";

        $var1 = 1;

        echo "<div class='resultado'>";

        echo "<strong>Resultado:</strong><br>";

        while ($var1 < 6) {

            echo "Estamos ejecutando el código del bucle. Iteración: $var1<br>";

            $var1++;
        }

        echo "<strong>Hemos salido del bucle.</strong>";

        echo "</div>";

        echo "</div>";


        // EJEMPLO 2: DO WHILE

        echo "<div class='ejemplo'>";

        echo "<h2>Bucle Do While</h2>";

        echo "<p>Primero ejecuta el código y después comprueba la condición.</p>";

        echo "<pre>";
        echo htmlspecialchars('$var2 = 1;

do {
    echo "Iniciamos el código del bucle";
    $var2++;
} while ($var2 < 6);');
        echo "</pre>";

        $var2 = 1;

        echo "<div class='resultado'>";

        echo "<strong>Resultado:</strong><br>";

        do {

            echo "Iniciamos el código del bucle. Iteración: $var2<br>";

            $var2++;

        } while ($var2 < 6);

        echo "<strong>Hemos salido del bucle.</strong>";

        echo "</div>";

        echo "</div>";


        // EJEMPLO 3: DIFERENCIA ENTRE WHILE Y DO WHILE

        echo "<div class='ejemplo'>";

        echo "<h2>Comprobando la diferencia</h2>";

        echo "<p>En este ejemplo utilizaremos una variable con valor 7 y una condición que exige que sea menor que 6.</p>";

        echo "<pre>";
        echo htmlspecialchars('$var3 = 7;

while ($var3 < 6) {
    echo "Este mensaje no aparecerá";
}

do {
    echo "Este mensaje aparecerá una vez";
} while ($var3 < 6);');
        echo "</pre>";

        $var3 = 7;

        echo "<div class='resultado'>";

        echo "<strong>Resultado del While:</strong><br>";

        while ($var3 < 6) {
            echo "Este mensaje no aparecerá.<br>";
        }

        echo "El bucle While no se ejecutó porque la condición era falsa.";

        echo "<hr>";

        echo "<strong>Resultado del Do While:</strong><br>";

        do {
            echo "Este mensaje aparece una vez porque Do While ejecuta primero el código.<br>";
        } while ($var3 < 6);

        echo "</div>";

        echo "</div>";

        ?>

    </div>

</body>
</html>
