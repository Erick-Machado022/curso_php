<?php

    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $pass = "";

    $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

    $stmt = $conn->prepare("INSERT INTO itens (nome, descricao, preco) VALUES (:nome, :descricao, :preco)");

    $nome = "suporte de notebook";
    $descricao = "Suporte novo para notebooks de alta performace";
    $preco = 199.99;

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $descricao);
    $stmt->bindParam(":preco", $preco);

    $stmt->execute();


?>

