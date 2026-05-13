<?php


    $frase = 'O rato roeu a roupa do rei de roma';
    $cont = 0;

    for($i=0; $i<strlen($frase); $i++){
        if($frase[$i] == 'a'){
            $cont++;
        }
    }

    echo "A letra 'a' foi encontrada $cont vezes"

?>