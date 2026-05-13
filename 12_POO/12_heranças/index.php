<?php

    class Humano{
        public $idade = 29;
        
        public function falar(){
            echo "Olá mundo! <br>";
        }

        private function gritar(){
            echo "AAAAAAAAAAAA <br>";
        }

        public function getGritar(){
            $this->gritar();
        }
    }

    class Programador extends Humano{

    }

    $ze = new Humano;

    echo $ze->idade . "<br>";
    echo $ze->falar();

    $erick = new Programador;

    $erick->falar();
    $erick->getGritar();


?>