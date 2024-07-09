<?php
    $a =[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
    $cont = 0;
    for($cont = 0; $cont < count($a); $cont++)
    {
        if($a[$cont] % 2 == 0)
        {
            echo "$a[$cont] <br>";
        }
      
       
    }
?>