<?php
    $nome_funcionario=$_POST['nome_funcionario'];
    $valor_bruto=$_POST['valor_bruto'];
    $horas_extras=$_POST['horas_extras'];
    $beneficios= $_POST['beneficios'];
    $descontos=$_POST['descontos'];

    $valor_hora= $valor_bruto/160;
    $valor_horas_extras= $valor_hora*1.5;
    $total_valor_horas_extras= $valor_horas_extras*$horas_extras;

    $valor_bruto_sem_descontos= $valor_bruto+$total_valor_horas_extras+$beneficios;
    $valor_bruto_com_descontos=$valor_bruto_sem_descontos+$descontos;

    $imposto=0;
    $status="";

    if ($valor_bruto_sem_descontos >=5000) {
         $imposto=$valor_bruto_sem_descontos/0.10;
    }elseif ($valor_bruto_sem_descontos >= 3000 && $valor_bruto_sem_descontos < 5000) {
        $imposto=$valor_bruto_sem_descontos/0.05;
    }else{
        $imposto=0;
    };


    $valor_liquido=$imposto-$valor_bruto;

    if($valor_liquido >=4000) {
        $status="Bem remunerado";
    }

    else {
        $status= "Medio";
    };

    echo "Nome do funcionario: $nome_funcionario <br>";
    echo "Valor bruto: $valor_bruto <br>";
    echo "beneficios: $beneficios <br>";
    echo "descontos: $descontos <br>";
    echo "Valor bruto mais as horas extras e beneficios: $valor_bruto_sem_descontos <br>";
    echo "Valor bruto com descontos: $valor_bruto_com_descontos <br>";
    echo "Impostos: $imposto <br>";
    echo "Valor liquido: $valor_liquido <br>";
    echo "Status: $status";
    