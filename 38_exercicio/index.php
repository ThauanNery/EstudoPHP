<?php

    $lista = ["ovo", "queijo", "biscoito", "carne", "feijão", "arroz"];

   function listagem($a)
   {
        $t = "Itens do mercado: ";

        for($i = 0; $i < count($a); $i++)
        {
            if($i + 1 == count($a))
            {
                $t .= "$a[$i].";
            }
            else
            {
                $t .= "$a[$i],";
            }
        }

        return $t;
   }

   echo listagem($lista);
?>