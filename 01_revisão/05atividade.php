<?php //Selecionando a linguagem
    $arr=[2,1,4,5,6];//Criando array
    $Resultado=0;//Criando variavel para o resultado

    foreach($arr as $numero){//Para cada numero na variavel
        $Resultado+=$numero; //Some o com resultado
        // $Resultado = $Resultado + $numero;
    };
    echo "Resultado:$Resultado"//Imprima o resultado
?>