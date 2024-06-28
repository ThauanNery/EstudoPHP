<?php
    $vel = 100;
    $vel2 = 40;
    $vel3 = 35;
    $limiteVel = 40;

    if($vel == $limiteVel)
    {
        echo "Você está no limite de velocidade da via, cuidado! 1 <br>";
    }
    elseif($vel > $limiteVel)
    {
        echo "Eu gosto assim, amostradinho! Espere sua multa em casa bb! 1 <br>";
    }
    elseif($vel < $limiteVel)
    {
        echo "Vc esta dentro do limite de velocidade da via! 1 <br>";
    }

    if($vel2 == $limiteVel)
    {
        echo "Você está no limite de velocidade da via, cuidado! 2 <br>";
    }
    elseif($vel2 > $limiteVel)
    {
        echo "Eu gosto assim, amostradinho! Espere sua multa em casa bb! 2 <br>";
    }
    elseif($vel2 < $limiteVel)
    {
        echo "Vc esta dentro do limite de velocidade da via! 2 <br>";
    }

    if($vel3 == $limiteVel)
    {
        echo "Você está no limite de velocidade da via, cuidado! 3 <br>";
    }
    elseif($vel3 > $limiteVel)
    {
        echo "Eu gosto assim, amostradinho! Espere sua multa em casa bb! 3 <br>";
    }
    elseif($vel3 < $limiteVel)
    {
        echo "Vc esta dentro do limite de velocidade da via! 3 <br>";
    }
?>