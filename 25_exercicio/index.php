<?php
    $var1 = "23";
    $var2 = "Thauan";
    $var3 = 60;

    if(is_numeric($var1))
    {
        $mult1 = $var1 * 2;

        if($mult1 > 100)
        {
            echo "A multiplação de $var1 por 2 é maior que 100! <br>";
        }
        else
        {
            echo "A multiplação de $var1 por 2 não é maior que 100! <br>";
        }
    }
    else
    {
        echo "$var1 não é um número! <br>";
    }

    if(is_numeric($var2))
    {
        $mult2 = $var2 * 2;

        if($mult2 > 100)
        {
            echo "A multiplação de $var2 por 2 é maior que 100! <br>";
        }
        else
        {
            echo "A multiplação de $var2 por 2 não é maior que 100! <br>";
        }
    }
    else
    {
        echo "$var2 não é um número! <br>";
    }

    if(is_numeric($var3))
    {
       $mult3 = $var3 * 2;

        if($mult3 > 100)
        {
            echo "A multiplação de $var3 por 2 é maior que 100! <br>";
        }
        else
        {
            echo "A multiplação de $var3 por 2 não é maior que 100! <br>";
        }
    }
    else
    {
        echo "$var3 não é um número! <br>";
    }
?>