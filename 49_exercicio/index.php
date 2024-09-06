<?php

    $pelo = 'laranja';
    $olhos = 'castanhos';
    $peso = '4kg';
    $nome = 'Simba';

    $gato = compact('pelo', 'olhos', 'peso', 'nome');

    print_r($gato);
    echo "<br>";

    foreach($gato as $Caracter => $values)
    {
        echo "$Caracter: $values <br>";
    }

?>