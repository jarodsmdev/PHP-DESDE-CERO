<style>
    .resultado{
        color: #F00;
        font-weight: bold;
        font-size: 32px;
    }
</style>

<?php
        if(isset($_POST["button"])){
            $numero1 = $_POST["num1"];
            $numero2 = $_POST["num2"];
            $operacion = $_POST["operacion"];

            calcular($operacion, $numero1, $numero2);
        }

        function calcular($calculo, $numero1, $numero2){
            //Si no son distintos -> Son iguales
            if(!strcmp("Suma", $calculo)){
                echo "<p class='resultado'>El resultado es: " . ($numero1 + $numero2) ."</p>";
            }
            if(!strcmp("Resta", $calculo)){
                 echo "<p class='resultado'>El resultado es: " . ($numero1 - $numero2) ."</p>";
            }
            if(!strcmp("Multiplicacion", $calculo)){
                 echo "<p class='resultado'>El resultado es: " . ($numero1 * $numero2) ."</p>";
            }
            if(!strcmp("Division", $calculo)){
                 echo "<p class='resultado'>El resultado es: " . ($numero1 / $numero2) ."</p>";
            }
            if(!strcmp("Modulo", $calculo)){
                echo "<p class='resultado'>El resultado es: " . ($numero1 % $numero2) ."</p>";
            }
            if(!strcmp("Potencia", $calculo)){
                 echo "<p class='resultado'>El resultado es: " . ($numero1 ** $numero2) ."</p>";
            }
        }
    ?>