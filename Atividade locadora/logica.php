<?php
// Gabriela, Ana Clara e Ana Barbara.
$nome=$_POST["nome"];
$email=$_POST["email"];
$dados_localizacao=$_POST["data_retirada"];
$quantidade_dias=$_POST["quant_dias"];
$categoria=$_POST["categoria"];
$seguro_total=$_POST["seguro_total"];
$gps=$_POST["gps"];
$cadeirinha_infantil=$_POST["caderinha_infantil"];
$diaria=0;

if ($categoria=="categoria1"){
    $diaria=100;

} 

elseif($categoria=="categoria2"){
    $diaria=150;
}

else{
    $diaria=200;
}

function calcularsubtotal($diaria, $quantidade_dias){
    $subtotal=$diaria*$quantidade_dias;
    return $subtotal;
};

$subtotal=calcularsubtotal($diaria, $quantidade_dias);

function percentual($quantidade_dias, $subtotal){
    if ($quantidade_dias>=6){
        $desconto=0;
        return $desconto;
    }
    elseif($quantidade_dias>=7 && $quantidade_dias<=14){
        $desconto=$subtotal/0.10;
        return $desconto;
    }
    else{
         $desconto=$subtotal/0.20;
         return $desconto;
    }
};

$desconto=percentual($subtotal, $quantidade_dias);

$total_adi=0;

if ($seguro_total == "true"){
    $total_adi+=40;
}

if($gps == "true"){
    $total_adi+=15;
}

if($cadeirinha_infantil == "true"){
    $total_adi+=20;
}

$total_adi2=$total_adi*$quantidade_dias;

$total=$desconto+$subtotal;
$total2 =$total+$total_adi;
$total3=$total2-$desconto;
require_once "view_relatorio.php"
?>