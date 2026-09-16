<?php
    $nome_aluno=$_POST['nome_aluno'];
    $primeira_nota=$_POST['primeira_nota'];
    $segunda_nota=$_POST['segunda_nota'];
    $terceira_nota=$_POST['Terceira_nota'];
    $soma=$primeira_nota+$segunda_nota+$terceira_nota;
    $media=$soma/3;

    if ($media>10){
        $media=10;
    }

    require_once "view_relatorio.php";

?>