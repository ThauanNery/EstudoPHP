<?php
    $nome = "Thauan";
    $idade = 23;
    $condicao = true;

    $msg1 = "É um int! <br>";
    $msg2 = "Não é um int! <br>";

    if(is_int($nome)) 
    {
        echo "1 - ";
        echo $msg1;
    }
    else
    {
        echo "1 - ";
        echo $msg2;
    }

    if(is_int($idade)) 
    {
        echo "2 - ";
        echo $msg1;
    }
    else
    {
        echo "2 - ";
        echo $msg2;
    }

    if(is_int($condicao)) 
    {
        echo "3 - ";
        echo $msg1;
    }
    else
    {
        echo "3 - ";
        echo $msg2;
    }

?>