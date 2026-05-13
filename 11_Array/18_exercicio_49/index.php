<?php

    $raca = "Vira Lata";
    $nome = "Toddy";
    $idade = 3;
    $cor = "preto";

    $toddy = compact("raca", "nome", "idade", "cor");

    foreach($toddy as $key => $values){
        echo "$key = $values <br>";
    }


?>