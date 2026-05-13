<?php


    if(isset($_GET["nome"], $_GET["idade"])) {
        $nome = $_GET["nome"];
        $idade = $_GET["idade"];
    }else{
        echo "Nome e idade não preenchidos";
    }

   

?>

 <h1>Seu nome é <?= $nome ?> e sua idade é <?= $idade ?></h1>

