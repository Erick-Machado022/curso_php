<?php

    function parOuImpar($num){
        if($num % 2 == 0){
            echo "O número $num é par <br>";
        }else{
            echo"O número $num é ímpar <br>";
        }
    }


    parOuImpar(6);
    parOuImpar(3);
    parOuImpar(8);
    parOuImpar(1);
    parOuImpar(0);
    parOuImpar(61);

?>