<?php
    $arr = [10,20,30,40,50,60,70,80,90,100];
    $cont = 0;
    while($cont < count($arr))
    {
       
        if($arr[$cont] == 30 || $arr[$cont] == 40)
        {
            $cont++;
            continue;
           
        }
        echo " $arr[$cont] <br>";
        $cont++;
       
    }
?>