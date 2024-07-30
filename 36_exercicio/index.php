<?php

    $ar = [];

    for($cont = 0; $cont <= 30; $cont++)
    {
        array_push($ar, $cont);
    }

    function novoArray($arr)
    {
        $retorno = [];

        for($novo = 0; $novo < count($arr); $novo++)
        {
            if($arr[$novo] > 7)
            {
                    array_push($retorno, $arr[$novo]);
            }
        }

        return $retorno;
    }

    $novArray = novoArray($ar);

    print_r($novArray);
?>