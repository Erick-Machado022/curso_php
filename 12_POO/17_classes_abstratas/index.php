<?php

    abstract class Animal{
        public static function respirar(){
            echo "Respirando";
        }

        abstract public function emitirSom();
    }

    class cachorro extends Animal{
        public function emitirSom(){
            echo "Auau<br>";
        }
    }

    class gato extends Animal{
        public function emitirSom(){
            echo "miau miau<br>";
        }
    }

    $toddy = new cachorro;

    $toddy->emitirSom();

    $gatinho = new gato;
    $gatinho->emitirSom();




?>