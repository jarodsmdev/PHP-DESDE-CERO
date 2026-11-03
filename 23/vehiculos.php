
<?php

// Clase Coche
class Coche
{

    public $ruedas;
    public $color;
    public $motor;

    // Constructor con parámetros
    public function __construct($ruedas, $color, $motor)
    {
        $this->ruedas = $ruedas;
        $this->color = $color;
        $this->motor = $motor;
    }

    // Métodos
    public function arrancar()
    {
        echo "<p>Estoy arrancando</p>";
    }

    public function girar()
    {
        echo "<p>Estoy girando</p>";
    }

    public function frenar()
    {
        echo "<p>Estoy frenando</p>";
    }

    // Método con parámetro
    public function establece_color(string $color_coche)
    {
        $this->color = $color_coche;

        echo "<p>El color de este coche es: {$this->color}</p>";
    }
}


// Clase Camion
class Camion
{

    public $ruedas = 8;
    public $color = "Gris";
    public $motor = 2600;

    // Esta clase no tiene constructor

    public function arrancar()
    {
        echo "<p>Estoy arrancando</p>";
    }

    public function girar()
    {
        echo "<p>Estoy girando</p>";
    }

    public function frenar()
    {
        echo "<p>Estoy frenando</p>";
    }
}

?>
