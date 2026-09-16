<?php
    $nome=$_POST['nome'];
    $peso=$_POST['peso'];
    $altura=$_POST['altura'];
    $raiz_quadrada_altura=$altura*$altura;
    $imc=$raiz_quadrada_altura/$peso;

    require_once "view_relatorio.php"
?>