<?php

$array = [5, "erick", true, false, 70, "Machado", "teste 123", "oi", [], 12.8];

$contador = count($array);
$y = 0;

while ($y < $contador) {
    
    if(is_string($array[$y])){;
        echo $array[$y] . "<br>";
    }

    $y++;

}


?>