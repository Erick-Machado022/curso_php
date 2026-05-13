<?php

    trait Objeto{

        public function falar(){
            echo "Testando o Trait <br>";    
        }

    }

    trait Teste{

        public function teste2(){
            echo "Executando Teste 2 <br>";
        }
    }

    class Central{
        
        use Objeto;
        use Teste;

    }


    $x = new Central;

    $x->falar();

    $y = new Central;
    $y ->teste2();


    ?>


