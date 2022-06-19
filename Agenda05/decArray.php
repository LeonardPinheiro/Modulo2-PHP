<?php
    $sudeste = array("São Paulo","Minas Gerais","Rio de Janeiro","Espirito Santo");
    echo $sudeste[0];
?>

<?php
    $sudeste = ["São Paulo","Minas Gerais","Rio de Janeiro","Espirito Santo"];
    echo $sudeste[2];
?>


<?php
//Array declarado Diretamente
$sudeste[] = "São Paulo";
$sudeste[] = "Minas Gerais";
$sudeste[] = "Rio de Janeiro";
$sudeste[] = "Espirito Santos";

//Array com Indices Definidos
$sudeste[1] = "Minas Gerais";
$sudeste[0] = "São Paulo";
$sudeste[2] = "Rio de Janeiro";
$sudeste[3] = "Espirito Santos";
?>


<?php
    //Arrays Assiciativos

    $filme = array('titulo' => 'Uma mnte Brilhante', 'Duração' => '135min', 'genero' => 'Drama');
    echo $filme['titulo'];

    //Declaração em forma Direta
    $filme['titulo'] = 'Uma mente brilhante';
    $filme['duracao'] = '135min';
    $filme['genero'] = 'drama';
    
    echo $filme['titulo'].'<br>';
    echo $filme['duracao'].'<br>';
    echo $filme['genero'].'<br>';
?>