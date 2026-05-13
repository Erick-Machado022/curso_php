<?php

    class Animal{

        public $nome;
        public $dono;

        function escolherNome($nome){
            $this->nome = $nome;

            echo "O nome do animal é  $nome <br>";

        } 

        function latir(){
            echo "$this->nome está latindo <br>";
        }

        function nomeDono($dono){
            $this->dono = $dono;
        }
    }

    $toddy = new Animal;
    $lala = new Animal;


    $toddy -> escolherNome("Toddy");
    $toddy ->latir();
    $toddy->nomeDono("Erick");

    echo "O dono do $toddy->nome é o $toddy->dono <br>";


    $lala -> escolherNome("Lala");
    $lala ->latir();
    $lala -> nomeDono("Aline");
    echo "O dono do $lala->nome é a $lala->dono <br>";



?>