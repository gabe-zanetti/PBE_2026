<?php
    $NOME=$_POST['NOME'];
    $PESO=$_POST['PESO'];
    $ALTURA=$_POST['ALTURA'] ?? 0;
    $PLANO=$_POST['PLANO'];
    $MESES=$_POST['MESES'];

    $MODALIDADE=$_POST['MODALIDADE'] ?? [];

    echo "<pre>";
    print_r($MODALIDADE);
    echo"</pre>";

    if(isset($MODALIDADE)){

    }
?>