<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatorio</title>
</head>
<body>
    <h1>Produto</h1>
    <p>Nome: <?= $produto->getnome()?></p>
    <p>quantidade: <?= $produto->getquantidade()?></p>
    <p>preço: <?= $produto->getpreco()?></p>
    <p>total: <?= $produto->calculartotal()?></p>
</body>
</html>