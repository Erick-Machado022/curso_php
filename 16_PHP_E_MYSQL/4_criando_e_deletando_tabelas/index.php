<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user,$pass, $db,);

    // $criar_tabela = "CREATE TABLE teste(nome VARCHAR(100), sobrenome VARCHAR(100)) VALUES('Erick', 'Machado')";

    $deletar_tabela = "DROP TABLE teste";

    $conn->query($deletar_tabela);

    $conn->close();