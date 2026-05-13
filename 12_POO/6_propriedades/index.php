<?php

    class Car{

        public $rodas = 4;
        public $aro = 20;
        public $cor = "Verde";

    }


    $ferrari = new Car;

    echo $ferrari->aro . "<br>";
    echo $ferrari->rodas . "<br>";
    echo $ferrari->cor . "<br>";

    echo "==mudando a cor== <br>";
    $ferrari->cor = "Azul";

    echo $ferrari->cor;


?>