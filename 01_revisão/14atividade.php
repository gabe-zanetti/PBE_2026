<?php

    $funcionários = [
        ["nome" => "Carlos", "cargo" => "Programador", "salario" => 500],
        ["nome" => "Ana", "cargo" => "Designer", "salario" => 3500],
        ["nome" => "Pedro", "cargo" => "Analista", "salario" => 3000],
        ["nome" => "Marina", "cargo" => "Gerente", "salario" => 1500],
        ["nome" => "João", "cargo" => "Suporte", "salario" => 1000],
        ["nome" => "Julia", "cargo" => "Estagiária", "salario" => 2000]
    ];

    $contador=0;
    $soma=0;

    foreach($funcionarios as $nome=>$valornome $cargo=>$valorcargo $salario=>$valorsalario){
        echo "".$nome."".$valornome."".$cargo."".$valorcargo."".$salario."".$valorsalario."<br>";
        $contador=contador+1;
        $soma=$soma+$valorsalario;

    };

    echo .$contador."<br>";
    echo $soma."<br>";
