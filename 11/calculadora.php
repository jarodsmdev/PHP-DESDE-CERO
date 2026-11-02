<style>
    .resultado{
        color: #F00;
        font-weight: bold;
        font-size: 32px;
    }
</style>

<?php
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
             if(!strcmp("Incremento", $calculo)){
                 echo "<p class='resultado'>El resultado es: " . (++$numero1) ."</p>";
            }
            if(!strcmp("Decremento", $calculo)){
                 echo "<p class='resultado'>El resultado es: " . (--$numero1) ."</p>";
            }
        }
    ?>