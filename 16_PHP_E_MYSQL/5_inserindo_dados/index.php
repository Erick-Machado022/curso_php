<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user,$pass, $db,);

    $nome_tabela = "itens";

    $inserindo_dados = "INSERT INTO $nome_tabela(nome,descricao, preco) VALUES('Relógio', 'Relógio bonito e caro', '99.99')";

    $conn -> query($inserindo_dados);

    $conn->close();