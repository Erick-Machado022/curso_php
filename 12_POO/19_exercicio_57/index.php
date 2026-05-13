<?php

    class cachorro{
        public $nome;
        public $cor;
        public $patas;

        function __construct($nome,$cor,$patas){
            $this->nome = $nome;
            $this->cor = $cor;
            $this->patas = $patas;
        }

        public function exibirCaracteristicas(){
            echo "O nome do meu cachorro é $this->nome, ele tem a cor $this->cor, e tem $this->patas patas <br>";
        }

    }

    $toddy = new cachorro("toddy", "Marrom", 4);

    $toddy->exibirCaracteristicas();



    




?>