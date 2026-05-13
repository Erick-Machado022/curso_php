<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user,$pass, $db,);

    $nome = "Teclado";
    $preco = "150";
    $descricao = "Teclado mecanico super mega bom";

    $smtm = $conn->prepare("INSERT INTO itens(nome, preco, descricao) VALUES (?,?,?)");

    $smtm->bind_param("sds", $nome, $preco, $descricao);

    $smtm->execute();

    $conn->close();


