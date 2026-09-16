<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da media</title>
</head>
<body>
    <p>Nome: <?= $nome ?></p>
    <p>Peso em kilogramas: <?= $peso ?> </p>
    <p>altura em metros: <?= $altura ?></p>
    <p>IMC: <?=$imc ?></p>

    <?php if($imc<18.50):?>
        <P>Abaixo do peso</P>
    <?php elseif($imc>=18.50 && $imc<=25.00): ?>
        <P>Peso ideal</P>
    <?php elseif($imc>25.00 && $imc<=30.00): ?>
        <p>Sobrepeso</p>
    <?php else: ?>
        <P> Obesidade</P>
    <?php endif ?>
    
</body>
