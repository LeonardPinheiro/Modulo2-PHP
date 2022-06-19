<?php require_once ('verificarAcesso.php')?>
<?php require_once 'cabecalho.php';?>

<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Listagem de Amigos</title>
</head>
<body> -->
    <a href="principal.php" class="w3-display-topleft">
        <i class="fa fa-arrow-circle-left w3-large w3-light-blue w3-button w3-xxlarge w3-round-large w3-card-4"></i>
    </a>

    <?php

        require_once 'conexaoBD.php';

        // $servername = "localhost";
        // $username = "root";
        // $password = "usbw";
        // $dbname = "pwii";
        // $conexao = new mysqli($servername, $username, $password, $dbname);
        // if($conexao->connect_error){
        //     die("Connection failed: " . $conexao->connect_error);
        // }

        
            echo '
            <div class="w3-padding w3-content w3-half w3-display-topmiddle w3-margin">
            <h1 class="w3-center w3-light-blue w3-round-large w3-margin">Listagem de Amigos</h1>
                <table class="w3-table-all w3-centered">
                    <thead>
                        <tr class="w3-center w3-light-blue">
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Apelido</th>
                            <th>Email</th>
                            <th>Excluir</th>
                            <th>Atualizar</th>
                        </tr>
                    <thead>';
                
        $sql = "SELECT * FROM amigo";
        $resultado = $conexao->query($sql);
        if($resultado != null)

        foreach($resultado as $linha){
            echo '<tr>';
            echo '<td>'.$linha['idamigo'].'</td>';
            echo '<td>'.$linha['nome'].'</td>';
            echo '<td>'.$linha['apelido'].'</td>';
            echo '<td>'.$linha['email'].'</td>';
            echo '<td> <a href="excluir.php?id='.$linha['idamigo'].'&nome='.$linha['nome'].'&apelido='.$linha['apelido'].'&email='.$linha['email'].'">
            <i class="fa fa-user-times w3-large w3-text-black"></i></a></td></td>';

            echo '<td><a href="atualizar.php?id='.$linha['idamigo'].'&nome='.$linha['nome'].'&apelido='.$linha['apelido'].'&email='.$linha['email'].'">
            <i class="fa fa-refresh w3-large w3-text-black"></i></a></td>';
                echo '</tr>';
        }
            echo '
                </table>
            </div>';
        $conexao->close();
    ?>
<!-- </body>
</html> -->

<?php require_once 'rodape.php';?>