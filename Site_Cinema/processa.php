<?php
$nome_cliente=$_POST['nome_cliente'];
$quantidade=$_POST['quantidade'];
$tipo=$_POST['tipo'];
$filme=$_POST['filme'];

function preco ($filme, $tipo)
{
    if ($filme == 'coracao_selvagem'){
        $preco = 20;
        
    } elseif ($filme == 'homem_aranha'){
        $preco = 25;
        
    } else {
        $preco = 30;
        
    } 
    
    if ($tipo == 'meia'){
        $preco = $preco / 2;
        
    }

    return $preco;
};

function calculo ($quantidade, $preco){
    $preco_total = $quantidade * $preco;

    return $preco_total;
};

$preco=preco ($filme, $tipo);
$preco_total=calculo ($quantidade, $preco);

$informacoes = [
        ['nome' => $nome_cliente,], 
        ['nome' => $quantidade,],
        ['nome' => $tipo,],
        ['nome' => $filme,],
        ['nome' => $preco],
        ['nome' => $preco_total],
];

require_once "view_relatorio.php"

?>