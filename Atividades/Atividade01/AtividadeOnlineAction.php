<?php
    $nome = $_POST['txtNome'];
    $sobrenome = $_POST['txtSobrenome'];
    $email = $_POST['txtEmail'];
    $formacao = $_POST['txtFormacao'];
    $descricao = $_POST['txtEmprego'];
?>

<link rel="stylesheet" type="text/css" href="estilo.css">

<body style="background-color:#008B8B;">

   

    <div class="container" id=div>

        <h2>Cadastro Confirmado com Sucesso</h2> 
     
<br> <br>

        <font>
            <?php
                echo "Nome: ".$nome. "<br>";

                echo "Sobrenome: ".$sobrenome. "<br>";

                echo "Email: ".$email. "<br>";

                echo "Formação: ".$formacao. "<br>";

                echo "Descrição Último Emprego: ".$descricao. "<br>";
            ?>
        </font>
    </div>
</body>