<?php

    date_default_timezone_set("America/Sao_Paulo");
    
    $data_A = new DateTime();
    $data_B = new DateTime();

    $data_A->setDate(2026, 02, 19);
   
    $data_B->setDate(2027, 01, 01);
    

    $diferença = $data_B->diff($data_A);

    echo $diferença->y . " Anos, ";
    echo $diferença->m . " Meses, ";
    echo $diferença->d . " Dias, ";