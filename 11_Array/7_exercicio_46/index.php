<?php

    $arr = [
        [1, 2, 3, 4],
        [2, 4, 6, 8],
        [3, 6, 9, 12]
    ];

    for($i = 0; $i<count($arr); $i++){

        echo "<br>";
        
        for($j=0; $j<count($arr[$i]); $j++){
            echo "Linha $i coluna $j é igual a {$arr[$i][$j]} <br>";
        }

    }


?>