
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - POO I</title>

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

        .vehiculos {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-top: 15px;
        }

        .vehiculo {
            background: #f1f5f9;
            border-radius: 8px;
            padding: 15px;
            border-top: 4px solid #2196a8;
        }

        .vehiculo h3 {
            margin-top: 0;
        }

        .vehiculo p {
            margin: 5px 0;
        }

        footer {
            text-align: center;
            color: #64748b;
            padding: 15px;
        }

        @media (max-width: 650px) {
            .vehiculos {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<div class="contenedor">

    <header>
        <h1>24.1 POO I</h1>
        <p>Programación Orientada a Objetos: clases e instancias.</p>
    </header>

    <!-- INTRODUCCIÓN -->
    <section class="seccion">
        <h2>¿Qué es la POO?</h2>

        <p>
            La Programación Orientada a Objetos es una forma de organizar
            el código mediante clases y objetos.
        </p>

        <p>
            Nos permite representar elementos del mundo real dentro
            de un programa, agrupando sus características y
            comportamientos.
        </p>

        <div class="explicacion">
            <strong>Ejemplo:</strong>
            Podemos representar un coche mediante sus características,
            como la marca, el modelo y el color, y sus comportamientos,
            como arrancar, frenar o acelerar.
        </div>
    </section>

    <!-- CLASE -->
    <section class="seccion">
        <span class="etiqueta">Concepto 1</span>
        <h2>¿Qué es una clase?</h2>

        <p>
            Una clase es una plantilla que define la estructura y las
            características que tendrán los objetos que creemos a partir
            de ella.
        </p>

        <p>
            Dentro de una clase podemos declarar:
        </p>

        <ul>
            <li>
                <strong>Propiedades:</strong> variables que representan
                los datos o características de un objeto.
            </li>
            <li>
                <strong>Métodos:</strong> funciones que representan
                las acciones o comportamientos de un objeto.
            </li>
        </ul>

        <div class="codigo">
            <pre><code>class Coche {

    // Propiedades
    public $marca;
    public $modelo;
    public $color;

    // Método
    public function arrancar() {
        echo "El coche está arrancando";
    }

}</code></pre>
        </div>

        <div class="explicacion">
            <strong>Observa:</strong>
            <ul>
                <li><code>class</code> declara una clase.</li>
                <li><code>Coche</code> es el nombre de la clase.</li>
                <li><code>public</code> indica que la propiedad o método es accesible desde fuera de la clase.</li>
                <li><code>$marca</code>, <code>$modelo</code> y <code>$color</code> son propiedades.</li>
                <li><code>arrancar()</code> es un método.</li>
            </ul>
        </div>
    </section>

    <!-- INSTANCIA -->
    <section class="seccion">
        <span class="etiqueta">Concepto 2</span>
        <h2>¿Qué es una instancia?</h2>

        <p>
            Una instancia es un objeto concreto que creamos utilizando
            una clase como plantilla.
        </p>

        <p>
            Para crear una instancia en PHP utilizamos la palabra
            reservada <code>new</code>, seguida del nombre de la clase.
        </p>

        <div class="codigo">
            <pre><code>// Declaramos la clase
class Coche {

}

// Creamos tres instancias
$renault = new Coche();
$mazda = new Coche();
$seat = new Coche();</code></pre>
        </div>

        <div class="explicacion">
            <strong>En este ejemplo:</strong>
            <ul>
                <li><code>Coche</code> es la clase.</li>
                <li><code>new</code> crea una nueva instancia.</li>
                <li><code>$renault</code>, <code>$mazda</code> y <code>$seat</code> son variables que hacen referencia a los objetos creados.</li>
                <li>Cada llamada a <code>new Coche()</code> crea un objeto independiente.</li>
            </ul>
        </div>

        <?php
            class VehiculoEjemplo {
            }

            $renaultEjemplo = new VehiculoEjemplo();
            $mazdaEjemplo = new VehiculoEjemplo();
            $seatEjemplo = new VehiculoEjemplo();
        ?>

        <div class="resultado">
            <strong>Resultado:</strong>
            <p>Hemos creado tres instancias de la clase VehiculoEjemplo.</p>
            <p>Renault: <?= get_class($renaultEjemplo) ?></p>
            <p>Mazda: <?= get_class($mazdaEjemplo) ?></p>
            <p>Seat: <?= get_class($seatEjemplo) ?></p>
        </div>
    </section>

    <!-- RESUMEN -->
    <section class="seccion">
        <h2>Resumen</h2>

        <ul>
            <li>
                <strong>POO:</strong> paradigma que organiza el código
                mediante clases y objetos.
            </li>
            <li>
                <strong>Clase:</strong> plantilla que define las
                características y comportamientos de los objetos.
            </li>
            <li>
                <strong>Propiedades:</strong> representan los datos
                o características de un objeto.
            </li>
            <li>
                <strong>Métodos:</strong> representan las acciones
                que puede realizar un objeto.
            </li>
            <li>
                <strong>Instancia:</strong> objeto concreto creado
                a partir de una clase.
            </li>
            <li>
                <strong>new:</strong> palabra reservada utilizada
                para crear instancias.
            </li>
            <li>
                <strong>->:</strong> operador utilizado para acceder
                a las propiedades y métodos de un objeto.
            </li>
        </ul>
    </section>

    <footer>
        PHP desde cero · Programación Orientada a Objetos I
    </footer>

</div>

</body>
</html>
