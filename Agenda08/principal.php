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
    <title>Projeto - MySQL</title>
</head>
<body> -->

    <div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-topright">
        <form action="logoutAction.php" class="w3-container" method='post'>
            <button name="btnLogout" class="w3-card-4 w3-button w3-red w3-cell w3-round-large w3-right">
                <i class="w3-xxlarge fa fa-sign-out" aria-hidden="true"> </i> Logout
            </button>
        </form>
    </div>

    <div class="w3-padding w3-text-grey w3-half w3-display-middle w3-center">
    <h1 class="w3-center w3-light-blue w3-round-large w3-margin">Projeto Lista de Amigos</h1>
        <div class="w3-row">
            <div class="w3-col w3-button w3-light-blue w3-cell w3-round-large" style="width:45%;">
                <a href="cadastro.php" style="text-decoration: none;">
                    <i class="fa fa-user-plus" style="font-size: 10.5em"></i>
                    <p style="font-size: 2em">Adicionar</p>
                </a>
            </div>


            <div class="w3-col w3-button w3-light-blue w3-cell w3-round-large w3-right" style="width: 45%;">
                <a href="listar.php" style="text-decoration: none;">
                    <i class="fa fa-vcard-o" style="font-size: 10.5em"></i>
                    <p style="font-size: 2em">Listar</p>
                </a>
            </div>
        </div>
    </div>
<!-- </body>
</html> -->

<?php require_once 'rodape.php';?>