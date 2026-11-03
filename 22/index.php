
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - POO II</title>

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
        <h1>24.2 POO II</h1>
        <p>Propiedades, métodos, constructores y modificación de objetos.</p>
    </header>

    <!-- PROPIEDADES Y MÉTODOS -->
    <section class="seccion">
        <span class="etiqueta">Concepto 1</span>
        <h2>Propiedades y métodos</h2>

        <p>
            Las propiedades almacenan los datos o características
            de los objetos, mientras que los métodos representan
            las acciones que pueden realizar.
        </p>

        <div class="codigo">
            <pre><code>class Coche {

    // Propiedades
    public $ruedas;
    public $color;
    public $motor;

    // Método
    public function arrancar() {
        echo "Estoy arrancando";
    }

}</code></pre>
        </div>

        <div class="explicacion">
            <strong>Observa:</strong>
            <ul>
                <li><code>$ruedas</code>, <code>$color</code> y <code>$motor</code> son propiedades.</li>
                <li><code>arrancar()</code> es un método.</li>
                <li>Las propiedades almacenan información y los métodos ejecutan acciones.</li>
            </ul>
        </div>
    </section>

    <!-- CONSTRUCTOR -->
    <section class="seccion">
        <span class="etiqueta">Concepto 2</span>
        <h2>El constructor</h2>

        <p>
            El constructor es un método especial que se ejecuta
            automáticamente cuando creamos una nueva instancia
            de una clase.
        </p>

        <p>
            En PHP se declara utilizando <code>__construct()</code>.
            Se utiliza para establecer los valores iniciales
            de las propiedades del objeto.
        </p>

        <div class="codigo">
            <pre><code>class Coche {

    public $ruedas;
    public $color;
    public $motor;

    // Constructor
    public function __construct() {
        $this->ruedas = 4;
        $this->color = "";
        $this->motor = 1600;
    }

}</code></pre>
        </div>

        <div class="explicacion">
            <strong>Observa:</strong>
            <ul>
                <li><code>__construct()</code> es el constructor.</li>
                <li>Se ejecuta automáticamente al utilizar <code>new</code>.</li>
                <li><code>$this</code> hace referencia al objeto actual.</li>
                <li>El operador <code>-></code> permite acceder a sus propiedades y métodos.</li>
            </ul>
        </div>

        <?php
        class Coche {

            // Propiedades
            public $ruedas;
            public $color;
            public $motor;

            // Constructor
            public function __construct() {
                $this->ruedas = 4;
                $this->color = "";
                $this->motor = 1600;
            }

            // Métodos
            public function arrancar() {
                echo "Estoy arrancando";
                echo "<br>";
            }

            public function girar() {
                echo "Estoy girando";
                echo "<br>";
            }

            public function frenar() {
                echo "Estoy frenando";
                echo "<br>";
            }
        }

        // Creamos las instancias
        $renault = new Coche();
        $mazda = new Coche();
        $seat = new Coche();
        ?>

        <div class="resultado">
            <strong>Resultado: valores iniciales</strong>

            <p>Hemos creado tres instancias de la clase Coche.</p>

            <div class="vehiculos">
                <div class="vehiculo">
                    <h3>Renault</h3>
                    <p>Ruedas: <?= $renault->ruedas ?></p>
                    <p>Color: <?= $renault->color ?: "Sin asignar" ?></p>
                    <p>Motor: <?= $renault->motor ?> cc</p>
                </div>

                <div class="vehiculo">
                    <h3>Mazda</h3>
                    <p>Ruedas: <?= $mazda->ruedas ?></p>
                    <p>Color: <?= $mazda->color ?: "Sin asignar" ?></p>
                    <p>Motor: <?= $mazda->motor ?> cc</p>
                </div>

                <div class="vehiculo">
                    <h3>Seat</h3>
                    <p>Ruedas: <?= $seat->ruedas ?></p>
                    <p>Color: <?= $seat->color ?: "Sin asignar" ?></p>
                    <p>Motor: <?= $seat->motor ?> cc</p>
                </div>
            </div>
        </div>

        <div class="nota">
            <strong>Importante:</strong>
            Cada vez que utilizamos <code>new Coche()</code>,
            se ejecuta el constructor y se inicializan las propiedades
            de esa nueva instancia.
        </div>
    </section>

    <!-- CAMBIO DE PROPIEDADES -->
    <section class="seccion">
        <span class="etiqueta">Concepto 3</span>
        <h2>Cambio de propiedades</h2>

        <p>
            Después de crear una instancia, podemos modificar
            los valores de sus propiedades utilizando el operador
            <code>-></code>.
        </p>

        <div class="codigo">
            <pre><code>// Modificamos las propiedades
$renault->color = "Rojo";
$renault->motor = 2000;

$mazda->color = "Azul";
$seat->color = "Negro";</code></pre>
        </div>

        <?php
        // Modificamos las propiedades
        $renault->color = "Rojo";
        $renault->motor = 2000;

        $mazda->color = "Azul";
        $seat->color = "Negro";
        ?>

        <div class="resultado">
            <strong>Resultado: propiedades modificadas</strong>

            <div class="vehiculos">
                <div class="vehiculo">
                    <h3>Renault</h3>
                    <p>Color: <?= $renault->color ?></p>
                    <p>Motor: <?= $renault->motor ?> cc</p>
                </div>

                <div class="vehiculo">
                    <h3>Mazda</h3>
                    <p>Color: <?= $mazda->color ?></p>
                    <p>Motor: <?= $mazda->motor ?> cc</p>
                </div>

                <div class="vehiculo">
                    <h3>Seat</h3>
                    <p>Color: <?= $seat->color ?></p>
                    <p>Motor: <?= $seat->motor ?> cc</p>
                </div>
            </div>
        </div>

        <div class="explicacion">
            <strong>Observa:</strong>
            Cada objeto conserva sus propios valores.
            Cambiar el color del Renault no modifica el color
            del Mazda ni el del Seat.
        </div>
    </section>

    <!-- LLAMADAS A MÉTODOS -->
    <section class="seccion">
        <span class="etiqueta">Concepto 4</span>
        <h2>Llamadas a métodos</h2>

        <p>
            Para ejecutar un método de un objeto utilizamos
            el operador <code>-></code>, seguido del nombre
            del método y los paréntesis.
        </p>

        <div class="codigo">
            <pre><code>// Llamadas a métodos
$mazda->arrancar();
$mazda->girar();
$mazda->frenar();</code></pre>
        </div>

        <div class="resultado">
            <strong>Resultado:</strong>

            <?php
            $mazda->arrancar();
            $mazda->girar();
            $mazda->frenar();
            ?>
        </div>

        <div class="explicacion">
            <strong>Observa:</strong>
            <ul>
                <li><code>$mazda->arrancar()</code> ejecuta el método arrancar.</li>
                <li><code>$mazda->girar()</code> ejecuta el método girar.</li>
                <li><code>$mazda->frenar()</code> ejecuta el método frenar.</li>
            </ul>
            Los métodos pertenecen a la clase y pueden utilizarse
            desde cualquiera de sus instancias.
        </div>
    </section>

    <!-- RESUMEN -->
    <section class="seccion">
        <h2>Resumen</h2>

        <ul>
            <li>
                <strong>Propiedades:</strong> almacenan los datos
                o características de un objeto.
            </li>
            <li>
                <strong>Métodos:</strong> representan las acciones
                que puede realizar un objeto.
            </li>
            <li>
                <strong>Constructor:</strong> método especial que
                se ejecuta al crear una instancia.
            </li>
            <li>
                <strong>__construct():</strong> nombre utilizado
                para declarar el constructor en PHP.
            </li>
            <li>
                <strong>$this:</strong> hace referencia al objeto actual.
            </li>
            <li>
                <strong>->:</strong> permite acceder a las propiedades
                y métodos de un objeto.
            </li>
            <li>
                <strong>Cambio de propiedades:</strong> permite
                modificar los valores de un objeto después de crearlo.
            </li>
            <li>
                <strong>Llamada a métodos:</strong> permite ejecutar
                las acciones definidas en una clase.
            </li>
        </ul>
    </section>

    <footer>
        PHP desde cero · Programación Orientada a Objetos II
    </footer>

</div>

</body>
</html>
