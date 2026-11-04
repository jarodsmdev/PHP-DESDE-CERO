
<?php

// SUPERCLASE
class Coche {

    public int $ruedas;
    public string $color;
    public int $motor;

    // Constructor
    public function __construct() {
        $this->ruedas = 4;
        $this->color = "";
        $this->motor = 1600;
    }

    // Métodos
    public function arrancar() {
        echo "<p>Estoy arrancando</p>";
    }

    public function girar() {
        echo "<p>Estoy girando</p>";
    }

    public function frenar() {
        echo "<p>Estoy frenando</p>";
    }

    public function establece_color(string $color) {
        $this->color = $color;

        echo "<p>El color del coche se ha cambiado a {$this->color}</p>";
    }
}


// SUBCLASE
class Camion extends Coche {

    // Constructor
    public function __construct() {
        $this->ruedas = 8;
        $this->color = "Gris";
        $this->motor = 2600;
    }

    // Sobrescritura de método
    public function establece_color(string $color) {
        $this->color = $color;

        echo "<p>El color del camión es {$this->color}</p>";
    }

    // Utilización de parent
    public function arrancar() {
        parent::arrancar();

        echo "<p>Camión arrancado</p>";
    }
}

?>
