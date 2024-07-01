<?php
    $arr = [1,"Thauan",3,"Futebol",5,"One Piece",7,"Academia",8,"Ace"];

    $a = count($arr);
    $b = 0;
    while($b < $a)
    {
       if(is_string($arr[$b]))
       {
            echo $arr[$b]. "<br>";
       }

       $b++;
    }
?>