<?php
    $nome=$_POST['nome'];
    $nome_filme=$_POST['nome_filme'];
    $quantidade_ingressos=$_POST['quantidade_ingressos'];
    $tipo=$_POST['tipo'];
    $preco= 50;
    if ($tipo == "meio") {
        $preco+$preco/2;
    }

    if ($quantidade > 10) {
        $desconto = $preco * 10/100;
        $preco = $preco - $desconto;
    }

    $total = $preco * $quantidade_ingressos;

    require_once "view_relatorio.php"
?>