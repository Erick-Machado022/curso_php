<?php

    class Humano{
        public $pernas = 2;
        public $mãos = 2;

        public function falar(){
            echo "Olá Mundo! <br>";
        }
    }

    class Professor extends Humano{
        public $disciplina = "matematica";

        public function darAula(){
            echo "O professor está dando aula de $this->disciplina <br>";
        }
    }

    $erick = new Humano;

    $cleber = new Professor;

    echo "$erick->pernas <br>";
    $erick->falar();

    echo "O professor tem $cleber->pernas pernas e $cleber->mãos mãos e ";
    $cleber->darAula();


?>