<?php

    class Carro{

        public $cor;
        public $tetoSolar;
        public $velocidadeMaxima;

        function setVelocidadeMaxima($vel){
            $this->velocidadeMaxima = $vel;
        }

        function getVelocidadeMaxima(){
            echo "a velocidade máxima do carro é $this->velocidadeMaxima km/h <br>";
        }
    }

    $celta = new Carro;

    $celta->cor = "Branco";
    $celta->tetoSolar = false; 
    $celta->setVelocidadeMaxima(220);
    $celta->getVelocidadeMaxima();

    $bmw = new Carro;

    $bmw->setVelocidadeMaxima(110);
    $bmw->getVelocidadeMaxima();


?>