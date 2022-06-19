<?php
    $transp = array("Carro","Moto","Bicicleta","Onibus","Avião","Navio");


    //para cada elemento em $transp, armazene na variavel que foi criada $veiculo
    foreach($transp as $veiculo){
        echo "$veiculo<br>";

        /*
        if($veiculo == "Bicicleta"){
            break;
        }
        */
    }


    echo "<br> <hr>";


    foreach($transp as $veiculo){
        if($veiculo == "Bicicleta"){
            echo "Bicicleta esta Na Lista de Veiculos<br>";
            break;
        }
        elseif($veiculo == "Avião"){
            echo "Avião esta na Lista de Veiculos<br>";
        }
    }
?>