<?php

    class Pessoa{
        public $nome;
        public $idade;

        function andar($m){
            echo "A pessoa andou $m metros <br>";
        }
    }

    $erick = new Pessoa;
    $joao = new Pessoa;

    $erick->nome = "Erick";
    $erick->idade = 21;

    echo "O nome dele é $erick->nome e tem $erick->idade anos <br>";

    $erick->andar(50);

    $joao->nome = "joão";
    $joao->idade = 20;

    echo "O nome dele é $joao->nome e tem $joao->idade anos <br>";

?>