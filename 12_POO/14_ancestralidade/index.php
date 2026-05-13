<?php

    class Humano{

    }

    class Animal{

    }

    class Professor extends Humano{

    }

    $erick = new Humano;
    $cachorro = new Animal;
    
    

    if($erick instanceof Humano){
        echo "Erick é um Humano <br>";
    }else{
        echo "Erick não é um Humano <br>";
    }


    if($cachorro instanceof Humano){
        echo "O Cachorro é um Humano <br>";
    }else{
        echo "O cachorro não é um Humano <br>";
    }


    $pedro = new Professor;

    if($pedro instanceof Professor){
        echo "Pedro é um professor <br>";
    }else{
        echo "Pedro não é um professor <br>";
    }

     if($pedro instanceof Humano){
        echo "Pedro é um Humano <br>";
    }else{
        echo "Pedro não é um Humano <br>";
    }




   
    


?>