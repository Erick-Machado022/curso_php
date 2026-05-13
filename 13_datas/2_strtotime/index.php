<?php

    date_default_timezone_set("America/Sao_Paulo");


    $cincoDias = strtotime("+5 days");

    $dataAtual = date("d/m/Y");

    echo $dataAtual . "<br>";
    
    $dataFutura = date("d/m/Y", $cincoDias);

    echo $dataFutura;