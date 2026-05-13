<?php

    function sumDigits($num){
        $soma = 0;

        while($num > 0){

        
            $ultimoDigito = $num %10; 
            $soma = $soma + $ultimoDigito; 
            $divisãoInteira = $num / 10; 
            $num = $divisãoInteira;
            $divisãoInteira = $divisãoInteira;
        }

        return $soma;
    }

    echo sumDigits(123)
    

?>