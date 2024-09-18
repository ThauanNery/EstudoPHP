<?php

    class Pessoa
    {
        public $nome;
        public $idade;

        function andar($m)
        {
            echo "Andou $m metros <br>";
        }
    }

    $p = new Pessoa;

    $p -> nome = "Thauan";

    echo $p -> nome . "<br>";

    $p -> idade = 23;

    echo $p -> idade . "<br>";

    $p ->andar(50);