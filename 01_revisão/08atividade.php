<?php
    $num=20;
    $num2=9;
    $operacao="+";

    switch($operacao) {
        case "+":
            echo "Resultado:". ($num+$num2);
            break;

        case "-":
            echo "Resultado". ($num-$num2);
            break;
        
        case "*":
            echo "Resultado". ($num*$num2);
            break;

        case "/":
            if($num2==0){
                echo "ERRO";
                break;
            }
            else{
                echo "Resultado".($num/$num2);
                break;
            }

        case "":
            echo"ERRO";
            break;

        default:
        echo "operação invalida";
        break;
    }
?>