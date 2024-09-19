<?php

    class Humano
    {
        public $cabeca = 1;
        public $ombros = 2;
        public $joelhos = 2;
        public $pes = 2;

        private function falar()
        {
           echo "Eu sou professor de Inglês  . <br>";
        }

        public function acessarFalar()
        {
            $this -> falar();
        }
    }

    class Professor extends Humano
    {
        public $giz = 5;
        public $apagador = 2;
        public $piloto = 3;

        public function acessarFalarProfessor()
        {
            $this -> acessarFalar();
        }

    }

    $Paulo =  new Professor;

    echo $Paulo -> cabeca . "<br>";
    echo $Paulo -> ombros . "<br>";
    echo $Paulo -> joelhos . "<br>";
    echo $Paulo -> pes . "<br>";

    $Paulo -> acessarFalarProfessor();

    echo $Paulo -> giz . "<br>";
    echo $Paulo -> apagador . "<br>";
    echo $Paulo -> piloto . "<br>";