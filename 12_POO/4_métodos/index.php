<?php

    class Pessoa {

        function falar(){
            echo "Olá, eu sou um objeto! <br>";
        }

        function somar($x, $y){
            echo $x + $y . "<br>";
        }

    }

    $erick = new Pessoa;
    $joao = new Pessoa;

    $erick->falar();


    $erick->somar(2,2);
    $joao->somar(12,12);



?>