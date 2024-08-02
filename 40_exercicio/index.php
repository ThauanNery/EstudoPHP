<?php

    $f= "O rato roeu a roupa do rei de roma";

    $as = 0;

    for($i = 0; $i < strlen($f); $i++)
    {
        if($f[$i] === "a")
        {
            $as++;
        }
    }

        echo "O número de 'A' na frase  é de $as <br>";
?>