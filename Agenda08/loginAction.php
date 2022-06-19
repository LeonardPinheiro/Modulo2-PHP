<?php require_once 'cabecalho.php';?>

<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
</head>
<body> -->
    <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle w3-center">
        <?php
        session_start();
            $nome = $_POST['txtNome'];
            $senha = $_POST['txtSenha'];

            require_once 'conexaoBD.php';
            
            // $servername = "localhost";
            // $username = "root";
            // $password = "usbw";
            // $dbname = "pwii";
            
            // $conexao = new mysqli($servername, $username, $password, $dbname);
            // if($conexao->connect_error){
            //     die("Connection failed: " . $conexao->connect_error);
            // }

            $sql = "SELECT * FROM usuario WHERE nome = '".$nome."';";
            $resultado = $conexao->query($sql);
            //echo $sql;
            $linha = mysqli_fetch_array($resultado);
            if($linha != null){
                if($linha['senha'] == $senha){
                    echo '<a href="principal.php">
                            <h1 class="w3-button w3-light-blue w3-round-xxlarge w3-card-4">'.$nome.', Seja Bem Vindo(a)! </h1>
                        </a>';

                    $_SESSION['logado'] = $nome;

                }else{
                    echo '<a href="index.php">
                            <h1 class="w3-button w3-light-blue w3-round-xxlarge w3-card-4">Login Inválido! </h1>
                        </a>';
                }
            }else{
                echo '<a href="index.php">
                        <h1 class="w3-button w3-light-blue w3-round-xxlarge w3-card-4">Login Inválido! </h1>
                    </a>';
            }
            $conexao->close();
        ?>
    </div>
<!-- </body>
</html> -->

<?php require_once 'rodape.php';?>