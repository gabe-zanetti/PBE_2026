<?php

// Recebendo os dados enviados pelo formulário
$nome_cliente = $_POST['nome_cliente'];
$quantidade = $_POST['quantidade'];
$tipo = $_POST['tipo'];
$filme = $_POST['filme'];


// Função responsável por descobrir o preço de UM ingresso
function preco($filme, $tipo)
{
    // Define o preço de acordo com o filme
    if ($filme == 'coracao_selvagem') {

        $preco = 20;

    } elseif ($filme == 'homem_aranha') {

        $preco = 25;

    } elseif ($filme == 'vingadores') {

        $preco = 30;

    } else {

        $preco = 0;
    }


    // Se for meia-entrada, divide o preço pela metade
    if ($tipo == 'meia') {

        $preco = $preco / 2;
    }

    return $preco;
}


// Função responsável por calcular o valor total
function calculo($quantidade, $preco)
{
    $preco_total = $quantidade * $preco;

    return $preco_total;
}


// Descobre o preço de um ingresso
$preco = preco($filme, $tipo);


// Calcula o valor total da compra
$preco_total = calculo($quantidade, $preco);


// Guarda todas as informações para mostrar no relatório
$informacoes = [
    ['nome' => $nome_cliente],
    ['nome' => $quantidade],
    ['nome' => $tipo],
    ['nome' => $filme],
    ['nome' => $preco],
    ['nome' => $preco_total]
];


// Envia as informações para a página do relatório
require_once "view_relatorio.php";

?>