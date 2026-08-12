<?php //Selecionando linguagem
    $comeco=1; //Criando uma variavel para o começo
    $final=20; //Criando uma variavel para o final
    for ( $i=$comeco ; $i <=$final; $i++){ //Se o numero for abaixo do numero final, acresentar mais um valor
        if ($i %2==0){ //Se o numero dividido por dois e igual a 0
            echo "$i <br>"; //Imprima o numero com uma linha para separar do proximo
        }
    }