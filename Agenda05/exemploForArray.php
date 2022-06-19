<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class=" w3-third w3-center w3-animate-top w3-padding">
        <form class="w3-container" method="post" action="atividadeOnlineAction.php">
            <label class="w3-text-teal"><b>Nome do Cliente</b></label>
            <input class="w3-input w3-border w3-light-grey" name="txtNome" type="text">

            <label class="w3-text-teal"><b>Valor da Compra</b></label>
            <input class="w3-input w3-border w3-light-grey" name="txtValorCompra" type="number">

            <label class="w3-text-teal"><b>Estado para envio</b></label>
            <select class="w3-input w3-border w3-light-grey" name="cmbEstados">
            
                <?php
                    $estados = array("Acre","Alagoas","Amapá","Amazonas","Bahia","Cerá","Espirito Santo","Goiás","Maranhão","Mato 
                    Grosso do Sul","Minas Gerais","Pará","Paraiba","Paraná","Pernambuco","Piaui","Rio de Janeiro","Rio Grande 
                    do Sul","Rondonia","Roraima","Santa Catarina","São Paulo","Santa Catarina","Sergipe","Tocantins","Destrito 
                     Federal");

                    //     for($i = 0; $i < count($estados); $i++){
                    //         echo '<option value="'.$i.'">'.$estados[$i].'</option>';
                    //     }
                        
                    foreach($estados as $estado){
                        echo '<option>'.$estado.'</option>';
                    } 
                ?>
            </select>
            <br>
            <button class="w3-btn w3-blue-grey">Enviar</button>
        </form>
    </div>
</body>
</html>