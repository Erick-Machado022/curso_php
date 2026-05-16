<?php

    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $pass = "";

    $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

    $id = 10;
    $nome = "Mouse Gamer";
    $desc = "mouse gamer com led";
    $preco = 20.99;

    $stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao, preco = :preco WHERE id= :id");

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $desc);
    $stmt->bindParam(":preco", $preco);
    $stmt->bindParam(":id", $id);

    $stmt->execute();

?>