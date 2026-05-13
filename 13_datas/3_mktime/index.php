<?php

    $dataNascimento = mktime(03, 15, 30, 11, 18, 2004);

    $dataFormatada = date("d/m/Y", $dataNascimento);

    echo $dataFormatada; 