<?php

    $pessoa = ['nome'=> 'Erick', 'idade'=>11, 'profissão'=>'Programador'];

    if($pessoa['idade']>=18){
        print_r($pessoa['nome'] . ' é  maior de idade');
    }
    else{
        print_r($pessoa['nome'] . ' não é maior de idade');
    }


?>