<?php

    $validacoes = [];

    if(count($_POST)>0){
        
        

        if(empty($_POST['name'])){
            $validacoes[] = "Preencha o nome do Usuario!";
        }
        if(empty($_POST['email'])){
            $validacoes[] = "Preencha o email do Usuario!";
        }
        if(empty($_POST['senha'])){
            $validacoes[] = "Preencha o senha do Usuario!";
        }
        if($_POST['senha'] != $_POST['confirmação']){
            $validacoes[] = "As senhas devem ser iguais";
        }




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

<?php if(count($validacoes)): ?>
    <ul>
        <?php foreach($validacoes as $validação): ?>
            <li><?= $validação ?></li>
        <?php endforeach ?>
    </ul>
    <?php endif; ?>
    <form action="index.php" method="POST">
        <div><input type="text" name="name" placeholder="Digite seu nome"></div>
        <div><input type="text" name="email" placeholder="Digite seu email"></div>
        <div><input type="password" name="senha" placeholder="Digite sua senha"></div>
        <div><input type="password" name="confirmação" placeholder="Confirme sua senha"></div>
        <div><input type="submit" value="Enviar"></div>
    </form>
</body>
</html>