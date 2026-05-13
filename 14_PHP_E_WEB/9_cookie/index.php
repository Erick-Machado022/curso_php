<?php

    setcookie("Nome","Erick", time() + 3600);
    
    if(isset($_COOKIE["Nome"])){
        $nome = $_COOKIE["Nome"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ola, mundo!</h1>
    <?php if(!empty($_COOKIE)): ?>
       <p> seja bem vindo <?= $nome ?></p>
    <?php endif; ?>
</body>
</html>