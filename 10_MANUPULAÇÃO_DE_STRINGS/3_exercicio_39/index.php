<?php

    $arr = [
        'Carro' => 100,
        'Porta' => 50,
        'Caneta' => 5,
        'borracha' => 2,
    ];

    function Preco($arr){

        $itensCaros = [];

        foreach($arr as $produto => $preco){
            if($preco>10){
                $itensCaros[$produto] = $preco;
            }
        }

        return $itensCaros;

    } 

    $novoArr = Preco($arr);

    print_r($novoArr);



?>