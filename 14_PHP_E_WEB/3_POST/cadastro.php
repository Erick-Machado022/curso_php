<?php

    $marca = $_POST['marca'];
    $preco = $_POST['preco'];

   

    echo "<h2> Carro cadastrado </h2>";
    echo "Marca $marca <br>";
    echo "Preço: R$ $preco <br><br>";

    if(isset($_POST["opcionais"])){
        echo "<b>Opcionais escolihos: </b> <br>";

        for($i=0; $i<count($_POST["opcionais"]); $i++){
            echo $_POST['opcionais'][$i] . "<br>";
        }
    }else{
        echo "Não foi adicionado nenhum opcional. <br>";
    }


?>