<?php

    interface Caracteristicas {

        public function falar();
        const nome = "Erick";

    }

    class Humano implements Caracteristicas{

        public $idade = 29;

        public function falar(){
            echo "Olá mundo! <br>";
        }

        public function dizerNome(){
            echo "Olá " . self::nome . "<br>";
        }
    }

    $erick = new Humano;

    $erick->falar();
    $erick->dizerNome();