<?php
    function exercicio ($v){
        $msg = "Esse numero é: ";
        if($v < 0)
            $msg = "negativo";
        elseif($v > 0){
            $msg.= "Positivo";
        }
        return $msg;
    }

    echo exercicio(0);
?>