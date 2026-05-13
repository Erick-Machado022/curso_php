<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user,$pass, $db,);

    $mostrar_dado = "SELECT * FROM itens";

    $result = $conn->query($mostrar_dado);

    $conn->close();

    $item = $result->fetch_assoc();

    print_r($item);

    echo"<br>";

    //Todos os Itens

    $itens = $result->fetch_all();

    print_r($itens);
