<?php
    $produtos=[
       ["nome"=>$_POST['nome_produto1'], "preco"=>$_POST['preco_produto1'], "quantidade"=>$_POST['quantidade_produto1'], "subtotal" => $_POST['quantidade_produto1']*$_POST['preco_produto1']],
       ["nome"=>$_POST['nome_produto2'], "preco"=>$_POST['preco_produto2'], "quantidade"=>$_POST['quantidade_produto2'] ,"subtotal" => $_POST['quantidade_produto2']*$_POST['preco_produto2']],
       ["nome"=>$_POST['nome_produto3'], "preco"=>$_POST['preco_produto3'], "quantidade"=>$_POST['quantidade_produto3'], "subtotal" => $_POST['quantidade_produto3']*$_POST['preco_produto3']],

    ];
    $total=0;
    $desconto=0;

    foreach ($produtos as $produto) {
        $total+= $produto['subtotal'];
    };
   
    require_once "view_repositorio.php"
?>