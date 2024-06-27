<?php
    $pLimite = 80;

    $p1 = 79.9;
    $p2 = 80.1;
    $p3 = 80;

    if($p1 <= $pLimite)
    {
        echo "Peso dentro do limite! 1 <br>";
    }
    else
    {
        echo "Peso acima do limite! 1 <br>";
    }

    if($p2 <= $pLimite)
    {
        echo "Peso dentro do limite! 2 <br>";
    }
    else
    {
        echo "Peso acima do limite! 2 <br>";
    }

    if($p3 <= $pLimite)
    {
        echo "Peso dentro do limite! 3 <br>";
    }
    else
    {
        echo "Peso acima do limite! 3 <br>";
    }
?>