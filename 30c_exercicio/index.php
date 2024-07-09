<?php
     $arr = [];
    

     for($cont = 10; $cont <= 20; $cont++)
     {
            array_push($arr, $cont);      
     }    
        print_r($arr);
     echo "<br>";
    for($cont = 0; $cont < count($arr); $cont++)
    {
        if($arr[$cont] % 2 != 0)
        {
            echo "$arr[$cont] <br>";
        }
    }    
?>