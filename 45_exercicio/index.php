<?php

    $a = range(10, 45);

    for($i = 0; $i < count($a); $i++)
    {
        $s = $a[$i] + 6;

        if($s > 30)
        {
            echo "O numero $s é muito alto <br> ";
        }
        else
        {
            echo "$s <br>";
        }
    }

?>