<?php
    $a = 4;

    while($a <= 30)
    {
        echo "N° $a <br>";

        if($a == 24)
        {
            echo "O loop atingiu o break";
            break;
        }

        $a = $a + 2;
    }
?>