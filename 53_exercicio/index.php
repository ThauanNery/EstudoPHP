<?php

    class Cachorro 
    {
        function latir()
        {
            echo "Au Au <br>";
        }

        function andar()
        {
            echo "Andando... <br>";
        }
    }

    $snoopy = new Cachorro;

    $snoopy -> latir();
    $snoopy -> andar();