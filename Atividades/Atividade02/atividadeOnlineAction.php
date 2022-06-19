<?php
$nome = $_POST['txtNome'];
$valor = $_POST['txtValorCompra'];
$pagamento = $_POST['cmbPag'];
$desconto = "";
$divisao;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promoção</title>
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <div class="container" style="width: 50%; height: 50%;" id="div">
        <font>
         PROMOÇÃO DO MÊS DE ANIVERSÁRIO! <br>
            <?php
                echo "" . $nome . " ! <br>";
                echo "Valor da Compra Sem Desconto: R$ ".$valor . "<br>";
                
                if($pagamento == "boleto"){
                    $desconto = "Desconto de: 8%";
                    $pagamento = "Boleto";
                    $divisao = $valor*8/100;
                    $valor = $valor - $divisao;
                }elseif($pagamento == "deposito"){
                    $desconto = "Desconto de: 10%";
                    $pagamento = "Depósito";
                    $divisao = $valor*10/100;
                    $valor = $valor - $divisao;
                }else{
                    $desconto = "Desconto: O metodo de cartão de Crédito não oferece descontos";
                    $pagamento = "Cartão de Crédito";
                    $divisao = 0;
                }
                
                echo "Forma de Pagamento Escolhida: " .$pagamento. "<br>";
                echo "" . "$desconto" . "<br>";
                echo "Você economizou: R$ " . $divisao . "<br>";
                echo "Valor à Pagar: R$ " . $valor ." ";

            ?>
        </font>
    </div>
</body>
</html>