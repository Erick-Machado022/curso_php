<?php

    date_default_timezone_set("America/Sao_Paulo");

    $data = new dateTime();

    echo $data->format("d/m/Y") . "<br>";

    //Data modifica

    $data->modify("+5days");

    echo $data->format("d/m/Y" . "<br>");
