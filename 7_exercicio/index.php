<?php
    $pessoa = ['nome' => 'Lucas', 'idade' => 23, 'sexo' => 'M', 'profissão' => 'Develop'];

    print_r($pessoa);

    echo "<br>";

    $nome = $pessoa['nome'];
    $idade = $pessoa['idade'];

    if($idade >= 18)
    {
        echo "$nome é maior de idade!";
    }
?>