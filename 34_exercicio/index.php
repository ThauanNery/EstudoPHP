<?php
    function parImpa($n)
    {
        if($n % 2 != 0)
        {
            echo "$n é impar <br>";
        }
        else
        {
            echo "$n é par <br>";
        }
    }

    parImpa(10);
    parImpa(13);
    parImpa(1010);
    parImpa(27);
?>