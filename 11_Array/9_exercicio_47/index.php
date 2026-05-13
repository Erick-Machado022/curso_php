<?php

    $carro = ["Jaguar", 3.0, "azul", 18, "Teto solar", "Automatico"];

    print_r($carro);

    list($marca, $modelo, $cor, $aro, $teto, $cambio) = $carro;

    echo "A marca do carro é $marca <br>";
    echo "é um carro $modelo.0 <br>";
    echo "De cor $cor <br>";
    echo "Aro: $aro <br>";
    echo "Com $teto <br>";
    echo "e é cambio $cambio <br>" ;



?>