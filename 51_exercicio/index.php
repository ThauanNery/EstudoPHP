<?php

    $p = [
        "KaiTN" => 150,
        "Castellik" => 130,
        "Fairest" => 170,
        "Samurai" => 145,
        "Ghost" => 154
    ];

    arsort($p);
?>
        <h1>Ranking:</h1>
        <ol>
        <?php foreach($p as $nick => $pontuacao): ?>           
                <li><?= $nick ?> -> <?= $pontuacao ?> Pontos</li>               
        <?php endforeach; ?>
        </ol>