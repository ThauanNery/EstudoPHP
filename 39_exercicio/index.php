<?php

    $itens = ["carro" => 500, "sófa" => 100, "cafeteira" => 9];

    function precos($itens)
    {
        $itensCaros = [];

        foreach($itens as $item => $preco)
        {
            if($preco > 10)
            {
                array_push($itensCaros, $item);
            }
        }
            return $itensCaros;
    }

    $novo = precos($itens);

    print_r($novo);
?>