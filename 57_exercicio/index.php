<?php

    class Cachorro
    {
        public $raca;
        public $cor;
        public $tamanho;

        function __construct($raca, $cor, $tamanho)
        {
            $this->raca = $raca;
            $this->cor = $cor;
            $this->tamanho = $tamanho;
        }
    }

        $caramelo = new Cachorro("Vira-Lata", "Caramelo", 57);

        echo "O cachorro é um $caramelo->raca da cor $caramelo->cor com $caramelo->tamanho centimetros de altura <br>";