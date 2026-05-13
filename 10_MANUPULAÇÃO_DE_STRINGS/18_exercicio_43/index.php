<?php

    $str = "carro - navio - helicóptero - barco - jangada";
    $StrArr = explode(" - ", $str);

    for($i=0; $i<count($StrArr); $i++){
        echo "Item: $StrArr[$i] <br>";
    }

?>