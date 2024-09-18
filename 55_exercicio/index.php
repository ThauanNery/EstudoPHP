<?php

    class Carro
    {
        public $cor;
        public $aro;
        public $motor;

        public $Vel_Max;

        function setVelMax($Vel_Max)
        {
            $this -> Vel_Max = $Vel_Max;
        }

        function getVelMax()
        {
            echo "Velocidade máxima atingida é: $this->Vel_Max km/h <br>";
        }
    }

    $fusca = new Carro;

    $fusca -> cor = "Branco";
    $fusca -> aro = 15;
    $fusca -> motor = "2.0 TSI ";

    $fusca -> setVelMax(300);
    $fusca -> getVelMax();

