<?php

    class carro{

        public $portas;
        public $cor;
        public $marca;


        function __construct($portas, $cor, $marca){

            $this->portas = $portas;
            $this->cor = $cor;
            $this->marca = $marca;

        }

        
        
    }

    $celta = new carro(4, "branco", "GM");

    echo "O meu carro tem $celta->portas portas da cor $celta->cor e é da marca $celta->marca";



?>