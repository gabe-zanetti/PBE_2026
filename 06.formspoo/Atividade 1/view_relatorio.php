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
    <p>quantidade: <?= number_format($produto->getquantidade(), 2, '.', '')?></p>
    <p>preço: <?= $produto->getpreco()?></p>
    <p>total: <?= $produto->verificarestoque()?></p>
    <p>total: <?= $produto->calculartotal()?></p>
    <p><b><?php if ($this->quantidade>=10):?>
        Parabéns! Você ganhou 10% de desconto.</b></p>
    <p><b><?php else:?>
        Dica: comprando 10 unidades ou mais você ganha10% de desconto.</b></p>
            <?php endif; ?>
</body>
</html>