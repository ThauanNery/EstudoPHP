<?php

    $carro = ['JAGUAR', 3.0, 'AZUL', 18, 'TETO SOLAR', 'AUTOMATICO'];

    print_r($carro);
    echo "<br>";

    list($marca, $motor, $cor, $silindrada, $teto, $cambio) = $carro;

    echo $marca . "<br>";
    echo $motor . "<br>";
    echo $cor . "<br>";
    echo $silindrada . "<br>";
    echo $teto . "<br>";
    echo $cambio . "<br>";

?>