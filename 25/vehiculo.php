
<?php

class Coche {

    protected int $ruedas;
    protected string $color;
    protected int $motor;

    // Constructor
    public function __construct() {
        $this->ruedas = 4;
        $this->color = "";
        $this->motor = 1600;
    }

    // GETTERS: permiten consultar propiedades

    public function get_ruedas() {
        return $this->ruedas;
    }

    public function get_motor() {
        return $this->motor;
    }

    public function get_color() {
        return $this->color;
    }

    // SETTERS: permiten modificar propiedades

    public function set_ruedas(int $ruedas) {
        $this->ruedas = $ruedas;
    }

    public function set_motor(int $motor) {
        $this->motor = $motor;
    }

    public function set_color(string $color) {
        $this->color = $color;

        echo "<p>El color del coche es {$this->color}</p>";
    }

    // Otros métodos

    public function arrancar() {
        echo "<p>Estoy arrancando</p>";
    }

    public function girar() {
        echo "<p>Estoy girando</p>";
    }

    public function frenar() {
        echo "<p>Estoy frenando</p>";
    }
}


class Camion extends Coche {

    // Constructor
    public function __construct() {
        $this->ruedas = 8;
        $this->color = "Gris";
        $this->motor = 2800;
    }

    // Sobrescritura de método
    public function set_color(string $color) {
        $this->color = $color;

        echo "<p>El color del camión es {$this->color}</p>";
    }

    // Sobrescritura de método
    public function arrancar() {
        parent::arrancar();

        echo "<p>Camión arrancado</p>";
    }
}

?>
