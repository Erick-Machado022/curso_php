<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    try{
    $conn = new mysqli($host, $user,$pass, $db,);

    echo "Conectado com sucesso! <br>";
    } catch(mysqli_sql_exception $e){

        echo "Erro na conexão <br>";
        echo "Erro: " . mysqli_connect_error();
    }

    $sql = "SELECT * FROM itens";

    $result = $conn->query($sql);

    print_r($result);

    $conn ->close();
?>