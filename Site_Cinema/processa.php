<?php
$nome_cliente=$_POST['nome_cliente'];
$quantidade=$_POST['quantidade'];
$tipo=$_POST['tipo'];
$filme=$_POST['filme'];
$preco=0;

if ($filme=="coracao_selvagem"){
    $preco=20;
}

elseif ($filme=="homem_aranha"){
    $preco=25;
}

else {
    $preco=30;
};


if ($tipo=="meia"){
    $preco=$preco/5;
};

$preco_total=$quantidade*$preco;

require_once "view_relatorio.php"
?>