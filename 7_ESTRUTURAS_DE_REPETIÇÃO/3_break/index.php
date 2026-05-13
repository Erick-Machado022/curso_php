<?php

    $x = 0;

    while ($x <= 10) {
        
        if($x %2 ==0){
            echo $x . "<br>";
            
        }

        if($x == 8){
            break;
        }

        $x++;
    }

?>