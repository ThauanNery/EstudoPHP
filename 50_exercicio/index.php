<?php

    $dados = [
        'Thauan' => 23,
        'Railucia' => 54,
        'Roberto' => 55,
    ];

?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($dados as $nome => $idade): ?>
        <tr>
            <td><?= $nome; ?></td>
            <td><?= $idade; ?></td>
        </tr>
    <?php endforeach ?>
</table>