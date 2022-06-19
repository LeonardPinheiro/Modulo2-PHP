<?php
    setcookie('usuario','gabi');
?>

<?php
    //criando um cookie para durar um dia

    setcookie('usuario','gabi',(time() + (24*3600) ) );
?>