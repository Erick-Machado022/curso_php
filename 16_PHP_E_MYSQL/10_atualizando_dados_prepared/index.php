<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user,$pass, $db,);

    $id = 4;

    $stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ?, preco = ?  WHERE id = ?");

    $nome = "Sofá";
    $desc = "Sofa de couro";
    $preco = 199.99;
    $stmt->bind_param("ssdi", $nome, $desc, $preco, $id );

    $stmt->execute();
  
