<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da media</title>
</head>
<body>
    <p>Nome do aluno: <?= $nome_aluno ?></p>
    <p>Primeira nota: <?= $primeira_nota ?> </p>
    <p>Segunda nota: <?= $segunda_nota ?></p>
    <p>Terceira nota: <?= $terceira_nota ?> </p>
    <p>Media: <?= $media ?></p>

    <?php if($media>=7):?>
        <p>Aprovado!!</p>
    <?php else: ?>
        <p>Reprovado</p>
    <?php endif ?>

    <?php if($media==10): ?>
        <p> Inclusive tambem passou com nota maxima!!</p>
    <?php endif ?>

</body>
</html>