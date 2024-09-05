<?php

    $mult = [
        [1, 2, 3, 4],
        ['Pizza', 'Hamburguer', 'Coxinha', 'Empada'],
        [5, 'Futebol', 6, 'Musculação']
    ];

   //loop no array externo
   for($i = 0; $i < count($mult); $i++)
   {
    echo "Imprimindo Array externo: " . ($i + 1) . "<br>";

    for($j = 0; $j < count($mult[$i]); $j++)
    {
        echo $mult[$i][$j] . "<br>";
    }
   }

?>