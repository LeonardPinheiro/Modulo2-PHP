<?php
    function media($nome, $n1, $n2, $n3){
        $media = ($n1 + $n2 + $n3) / 3;
        if($media >= 7)
            echo "O aluno: " . $nome . " Foi Aprovado com media de: " . $media . "<br>";
        else
            echo "O aluno: " . $nome . " Foi reprovado <br>";    
    }

        media('leo', 8, 8, 8);


?>