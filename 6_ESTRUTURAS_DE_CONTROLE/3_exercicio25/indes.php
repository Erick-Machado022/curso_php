<?php

    $a = 51;
    $b = 0;
    $c = "aaa";

    if(is_numeric($a)){
        $b = $a * 2;
        if($b > 100){
            echo "a multiplicação de $a pro dois é maior que 100";
        }else{
            echo"a multiplicação de $a por dois é menor que 100";
        }
    }else{
        echo "Não é um número."
    }

?>