<?php
    $idade=30;
    $acompanhada=true;

    if($idade>=17){
        echo "Pode entrar";
    }

    elseif($idade>=14 && $idade<=17 && $acompanhada=true){
        echo "Pode entrar";
    }

    else{
        echo "não pode entrar";
    }
?>