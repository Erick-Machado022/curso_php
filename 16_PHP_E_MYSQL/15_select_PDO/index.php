<?php

    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $pass = "";

    $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

    $stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");

    $id = 11;

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    print_r($result);



?>