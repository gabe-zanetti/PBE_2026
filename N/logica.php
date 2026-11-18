<?php
    $cliente=$_POST["nome"];
    $cidade_destino=$_POST["cidade"];
    $distancia=$_POST["destancia"];
    $caminhao=$_POST["caminhao"];
    $urgente=$_POST["urgencia"];
    $quantidade_piso=$_POST["qtd_piso"];
    $quantidade_revestimento=$_POST["qtd_revestimento"];
    $quantidade_argamassa=$_POST["qtd_argamassa"];
    $piso="Piso";
    $revestimento="Revestimento";
    $argamassa="Argamassa";
    $peso_maximo_caminhao=0;
    $preco_km=0;
    $preco_total=0;
    $total_viagens=0;
    $total_ind=0;
    $total=0;
    $viagens=0;
    $porcentagem=0;
    $porcentagem2=0;

    $produtos=[
        ["nome"=> $piso, "peso"=>28, "quantidade"=>$quantidade_piso,],
        ["nome"=> $revestimento, "peso"=>15, "quantidade"=>$quantidade_revestimento,],
        ["nome"=> $argamassa, "peso"=>20, "quantidade"=>$quantidade_argamassa,]
    ];

    if ($caminhao == "vuc"){
        $peso_maximo_caminhao=3000;
        $preco_km=4.50;
    }
    elseif ($caminhao == "toco"){
        $peso_maximo_caminhao=6000;
        $preco_km=6.00;
    }
    else{
        $peso_maximo_caminhao=12000;
        $preco_km=8.00;
    };

    foreach ($produtos as $produto){
        $total_ind=$produto["peso"]*$produto["quantidade"];
        $total=$total+$total_ind;
    };

    function viagenstotal($total, $peso_maximo_caminhao, $viagens){
        $viagens=$total/$peso_maximo_caminhao;
        return $viagens;
        
    };

    $viagens=viagenstotal($total, $peso_maximo_caminhao, $viagens);

    
    

    function frete($distancia, $preco_km, $preco_total){
        $preco_total=$distancia*$preco_km;
        $preco_total=$preco_total+20;
        return $preco_total;

    };

    $preco_total= frete($distancia, $preco_km, $preco_total);

    if ($distancia>=300){
        $porcentagem=$preco_total/0.15;
        $preco_total=$preco_total+$porcentagem;
    }

    if ($urgente=="sim"){
        $porcentagem2=$preco_total/0.20;
        $preco_total=$preco_total+$porcentagem2;
    }

    if ($total>=20000){
        $preco_total=0;
    }
    
    require_once "view_relatorio.php"
?>