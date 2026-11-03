
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Funciones II</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #263238;
            margin: 0;
            padding: 30px 15px;
            line-height: 1.6;
        }

        .contenedor {
            max-width: 950px;
            margin: auto;
        }

        header {
            background: #253b50;
            color: white;
            padding: 30px;
            border-radius: 12px;
            margin-bottom: 25px;
        }

        header h1 {
            margin-top: 0;
        }

        .seccion {
            background: white;
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 22px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.06);
        }

        h2 {
            color: #176b87;
            margin-top: 0;
        }

        h3 {
            color: #334e68;
        }

        .etiqueta {
            display: inline-block;
            background: #dceef4;
            color: #176b87;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .codigo {
            background: #202b38;
            color: #e6edf3;
            padding: 18px;
            border-radius: 8px;
            overflow-x: auto;
            margin: 15px 0;
        }

        pre {
            margin: 0;
            white-space: pre-wrap;
            overflow-wrap: anywhere;
            font-size: 14px;
        }

        code {
            font-family: Consolas, monospace;
        }

        .explicacion {
            background: #eaf4f8;
            border-left: 4px solid #2196a8;
            padding: 12px 16px;
            border-radius: 5px;
            margin: 15px 0;
        }

        .resultado {
            background: #eaf7ed;
            border: 1px solid #b7dfbf;
            padding: 15px;
            border-radius: 8px;
            margin-top: 12px;
        }

        .resultado strong {
            color: #246b35;
        }

        .nota {
            background: #fff6df;
            border-left: 4px solid #e5a000;
            padding: 12px 16px;
            border-radius: 5px;
            margin-top: 15px;
        }

        .comparacion {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-top: 15px;
        }

        .comparacion div {
            background: #f1f5f9;
            padding: 15px;
            border-radius: 8px;
        }

        footer {
            text-align: center;
            color: #64748b;
            padding: 15px;
        }

        @media (max-width: 600px) {
            .comparacion {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<div class="contenedor">

    <header>
        <h1>23.2 Funciones II</h1>
        <p>Paso de parámetros por valor y por referencia en PHP.</p>
    </header>

    <!-- INTRODUCCIÓN -->
    <section class="seccion">
        <h2>¿Cómo se pasan los parámetros?</h2>

        <p>
            Cuando enviamos información a una función, PHP permite
            trabajar con los argumentos por valor o por referencia.
        </p>

        <p>
            La diferencia principal está en si los cambios realizados
            dentro de la función afectan o no a la variable original.
        </p>

        <div class="comparacion">
            <div>
                <h3>Por valor</h3>
                <p>
                    La función trabaja con el valor recibido.
                    Los cambios realizados en el parámetro no modifican
                    directamente la variable original.
                </p>
            </div>

            <div>
                <h3>Por referencia</h3>
                <p>
                    La función trabaja mediante una referencia a la
                    variable original. Los cambios realizados en el
                    parámetro también afectan a esa variable.
                </p>
            </div>
        </div>
    </section>

    <!-- PASO POR VALOR -->
    <section class="seccion">
        <span class="etiqueta">Ejemplo 1</span>
        <h2>Paso de parámetros por valor</h2>

        <p>
            Por defecto, PHP pasa los argumentos a las funciones por valor.
            Esto significa que la función recibe el valor del argumento
            y puede trabajar con él sin modificar directamente la
            variable original.
        </p>

        <div class="codigo">
            <pre><code>function incrementaValor($valor1) {
    $valor1++;
    return $valor1;
}

$numero = 5;

echo incrementaValor($numero);
echo $numero;</code></pre>
        </div>

        <div class="explicacion">
            <strong>¿Qué sucede?</strong>
            <ul>
                <li>La variable <code>$numero</code> comienza con el valor 5.</li>
                <li>La función recibe ese valor en el parámetro <code>$valor1</code>.</li>
                <li>Dentro de la función, incrementamos el parámetro en una unidad.</li>
                <li>La función devuelve el valor 6 mediante <code>return</code>.</li>
                <li>La variable original <code>$numero</code> continúa teniendo el valor 5.</li>
            </ul>
        </div>

        <?php
            function incrementaValor($valor1) {
                $valor1++;
                return $valor1;
            }

            $numeroValor = 5;
            $resultadoValor = incrementaValor($numeroValor);
        ?>

        <div class="resultado">
            <strong>Resultado:</strong>
            <p>Valor devuelto por la función: <?= $resultadoValor ?></p>
            <p>Valor de la variable original: <?= $numeroValor ?></p>
        </div>

        <div class="nota">
            <strong>Observa:</strong> aunque la función incrementó el valor
            recibido, la variable original no cambió. Para conservar el
            resultado devuelto tendríamos que asignarlo:
            <code>$numero = incrementaValor($numero);</code>.
        </div>
    </section>

    <!-- PASO POR REFERENCIA -->
    <section class="seccion">
        <span class="etiqueta">Ejemplo 2</span>
        <h2>Paso de parámetros por referencia</h2>

        <p>
            El paso por referencia permite que una función modifique
            directamente la variable original que recibe como argumento.
        </p>

        <p>
            Para indicar que un parámetro se recibe por referencia,
            colocamos el símbolo <code>&amp;</code> delante de su nombre
            en la declaración de la función.
        </p>

        <div class="codigo">
            <pre><code>function incrementaReferencia(&$valor1) {
    $valor1++;
}

$numero = 5;

incrementaReferencia($numero);

echo $numero;</code></pre>
        </div>

        <div class="explicacion">
            <strong>¿Qué sucede?</strong>
            <ul>
                <li>La variable <code>$numero</code> comienza con el valor 5.</li>
                <li>La función recibe la variable por referencia mediante <code>&amp;$valor1</code>.</li>
                <li>Dentro de la función incrementamos su valor en una unidad.</li>
                <li>La variable original también se modifica.</li>
                <li>Al finalizar la función, <code>$numero</code> contiene el valor 6.</li>
            </ul>
        </div>

        <?php
            function incrementaReferencia(&$valor1) {
                $valor1++;
            }

            $numeroReferencia = 5;
            incrementaReferencia($numeroReferencia);
        ?>

        <div class="resultado">
            <strong>Resultado:</strong>
            <p>Valor de la variable después de ejecutar la función: <?= $numeroReferencia ?></p>
        </div>

        <div class="nota">
            <strong>Observa:</strong> en este caso no necesitamos utilizar
            <code>return</code> para modificar la variable original.
            El cambio se realiza directamente mediante la referencia.
        </div>
    </section>

    <!-- MODIFICAR CADENAS -->
    <section class="seccion">
        <span class="etiqueta">Ejemplo 3</span>
        <h2>Modificar una cadena de texto por referencia</h2>

        <p>
            El paso por referencia también permite modificar directamente
            el contenido de una variable de texto.
        </p>

        <div class="codigo">
            <pre><code>function cambia_mayus(&$param) {
    $param = strtolower($param);
    $param = ucwords($param);
}

$cadena = "hOlA mUnDo";

cambia_mayus($cadena);

echo $cadena;</code></pre>
        </div>

        <div class="explicacion">
            <strong>¿Qué sucede?</strong>
            <ul>
                <li><code>$cadena</code> contiene inicialmente el texto "hOlA mUnDo".</li>
                <li><code>strtolower()</code> convierte todas las letras a minúsculas.</li>
                <li><code>ucwords()</code> convierte la primera letra de cada palabra a mayúscula.</li>
                <li>Como el parámetro se recibe por referencia, la variable original queda modificada.</li>
            </ul>
        </div>

        <?php
            function cambiaMayusculas(&$param) {
                $param = strtolower($param);
                $param = ucwords($param);
            }

            $cadena = "hOlA mUnDo";
            $cadenaOriginal = $cadena;

            cambiaMayusculas($cadena);
        ?>

        <div class="resultado">
            <strong>Resultado:</strong>
            <p>Texto original: <?= htmlspecialchars($cadenaOriginal) ?></p>
            <p>Texto modificado: <?= htmlspecialchars($cadena) ?></p>
        </div>
    </section>

    <!-- COMPARACIÓN -->
    <section class="seccion">
        <h2>Comparación final</h2>

        <div class="comparacion">
            <div>
                <h3>Por valor</h3>
                <p><strong>Antes:</strong> $numero = 5</p>
                <p><strong>Dentro:</strong> $valor1 = 6</p>
                <p><strong>Después:</strong> $numero = 5</p>
            </div>

            <div>
                <h3>Por referencia</h3>
                <p><strong>Antes:</strong> $numero = 5</p>
                <p><strong>Dentro:</strong> $valor1 = 6</p>
                <p><strong>Después:</strong> $numero = 6</p>
            </div>
        </div>

        <div class="nota">
            <strong>Para recordar:</strong>
            utilizamos el paso por valor cuando queremos trabajar con un
            dato sin modificar directamente la variable original.
            Utilizamos el paso por referencia cuando necesitamos que
            los cambios realizados dentro de la función afecten a la
            variable original.
        </div>
    </section>

    <footer>
        PHP desde cero · Funciones II
    </footer>

</div>

</body>
</html>
