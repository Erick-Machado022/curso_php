<?php

    class Cachorro{
        function Latir(){
            echo "Au au <br>";
        }

        function andar($m){
            echo "O cachorro andou $m metros  <br>";
        }
    }

    $toddy = new Cachorro;
    $lala = new Cachorro;

    $toddy->Latir();
    $toddy->andar(15);

    $lala->andar(10)


?>